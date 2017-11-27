<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;


class HomepageController extends Controller
{
    /**
     * @Route("/",name = "homepage")
     */
    public function homeAction()
    {
        return $this->render('Navigation/basePage.html.twig', array('page_title'=>'Home')
         
        );
    }
}

?>