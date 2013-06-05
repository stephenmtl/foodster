<?php

namespace Food\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="_index_page")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('FoodStoreBundle:Default:index.html.twig');
    }

    /**
     *@Route("/kontaktai", name="_contacts_page")
     *@Template()
     */
    public function contactsAction(){
        return $this->render('FoodStoreBundle:Default:contact.html.twig');
    }

    /**
     * @Route("/apie", name="_aboutus_page")
     * @Template()
     */
    public function aboutusAction(){
        return $this->render('FoodStoreBundle:Default:about.html.twig');
    }

    /**
     * @Route("/siulome", name="_services_page")
     * @Template()
     */
    public function servicesAction(){
        return $this->render('FoodStoreBundle:Default:services.html.twig');
    }

    /**
     * @Route("/kainos", name="_prices_page")
     * @Template()
     */
    public function pricesAction(){
        return $this->render('FoodStoreBundle:Default:prices.html.twig');
    }
}
