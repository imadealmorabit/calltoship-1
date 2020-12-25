<?php

namespace App\Controller;

use App\Entity\Property;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController {

    /**
     * @Route("/biens", name="property.index", )
     * @return Response
     */
    public function index(): Response
    {
        $property = new Property();
        $property->setTitle('Mon premier bien')
            ->setRooms(4)
            ->setBedrooms(3)
            ->setDescription('Une petite description')
            ->setSurface(60)
            ->setFloor(4)
            ->setHeat(1)
            ->setCity('Rabat')
            ->setAddress('agdal')
            ->setPostalCode('10000');


        return $this->render('property/index.html.twig', ['current_menu' => 'properties']);
    }
}
