<?php

namespace Food\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class ShopController extends Controller{

    /**
     * @Route("/shop/{shopname}", defaults={"shopname" = "demo"})
     * @Template()
     */
    public function demoShopAction($shopname){

        $entityManager = $this->getDoctrine()->getEntityManager();

        $shop = $entityManager->getRepository("FoodStoreBundle:Shop")->findBy(array("name" => $shopname));

        if(!$shop){
        throw $this->createNotFoundException("No such shop!");
        } else {
            return $this->render('FoodStoreBundle:Shop:shop.html.twig', array ("shop" => $shop));
        }

    }



}