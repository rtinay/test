<?php

namespace module\ClientWebsitePortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homePageAction()
    {
        return $this->render('moduleClientWebsitePortalBundle:HomePage:homepage.html.twig', 
        						array('page_title'=>'Home Page')
        					);
    }
}
