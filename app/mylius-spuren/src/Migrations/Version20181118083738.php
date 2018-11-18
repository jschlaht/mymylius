<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181118083738 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mylius_art (id INT AUTO_INCREMENT NOT NULL, author VARCHAR(255) NOT NULL, object_type VARCHAR(255) NOT NULL, inventar_number VARCHAR(255) NOT NULL, new_image TINYINT(1) NOT NULL, new_image_name VARCHAR(255) DEFAULT NULL, year_begin DATETIME NOT NULL, year_end DATETIME NOT NULL, image_date DATETIME NOT NULL, city_reference VARCHAR(255) NOT NULL, image_type VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, title_collection VARCHAR(255) NOT NULL, title_image VARCHAR(255) DEFAULT NULL, comments LONGTEXT DEFAULT NULL, latitude DOUBLE PRECISION DEFAULT NULL, longitude DOUBLE PRECISION DEFAULT NULL, latlng_comment LONGTEXT DEFAULT NULL, new_image_author_name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mylius_art');
    }
}
