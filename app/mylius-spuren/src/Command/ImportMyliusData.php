<?php
namespace App\Command;

use App\Entity\MyliusArt;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use DateTime;

class ImportMyliusData extends Command
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;

        parent::__construct();
    }
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:import-mylius-data')

            // the short description shown while running "php bin/console list"
            ->setDescription('Import data to Mylius images.')

            // import data filename
            ->addArgument('filename', InputArgument::REQUIRED, 'Path to the import file.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command import mylius data from prepared csv file.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Start import mylius data');
        $output->writeln(sprintf('Try to find csv file %s',$input->getArgument('filename')));

        $row = 1;
        if (($handle = fopen($input->getArgument('filename'), "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                echo "$num Felder in Zeile $row:\n";
                if ($row > 1) {
                    $this->storeData($data);
                }
                $row++;

            }
            fclose($handle);
        }

        $this->entityManager->flush();
    }

    private function storeData(array $data)
    {
        $mylius = new MyliusArt();

        $mylius->setAuthor($data[0]);
        $mylius->setCityReference($data[9]);
        $mylius->setComments($data[20]);
        $mylius->setDescription($data[19]);
        $mylius->setImageDate($data[8]);
        $mylius->setInventarNumber($data[2]);
        $mylius->setImageType($data[10]);

        if (!empty($data[21])) {
            $coords = explode(',',$data[21]);
            if (count($coords) > 0) {
                $mylius->setLatitude(trim($coords[0]));
                $mylius->setLongitude(trim($coords[1]));
                if (isset($coords[2])){
                    $mylius->setLatlngComment(trim($coords[2]));
                }
            }
        }

        $mylius->setNewImageAuthorName($data[24]);
        $mylius->setNewImage($data[3] == 'ja' ? true : false);
        $mylius->setObjectType($data[1]);
        $mylius->setTitleCollection($data[18]);
        if (!empty($data[6])) {
            $mylius->setYearBegin($date = DateTime::createFromFormat('Y', $data[6]));
        }
        if (!empty($data[7])) {
            $mylius->setYearEnd($date = DateTime::createFromFormat('Y', $data[7]));
        }

        $this->entityManager->persist($mylius);
    }
}