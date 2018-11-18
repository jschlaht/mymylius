<?php

namespace App\Controller;

use App\Entity\MyliusArt;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $entityManager->getRepository(MyliusArt::class)->findAll('MyliusArt');

        $mapPoints = [];

        /** @var MyliusArt $item */
        foreach ($data as $item) {
            if (!empty($item->getLatitude())) {
                $mapPoints[] = [
                    'lat' => $item->getLatitude(),
                    'lng' => $item->getLongitude(),
                    'title' => $item->getTitleCollection()];
            }
        }

        return $this->render('homepage/index.html.twig', [
            'mapData' => $mapPoints,
        ]);
    }
}
