<?php
//
namespace module\ClientWebsitePortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller {
    public function homePageAction() {

	    if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
	      throw new AccessDeniedException('Accès limité aux auteurs.');
	    }
        return $this->render('moduleClientWebsitePortalBundle:HomePage:homepage.html.twig', 
        						array('page_title'=>'Home Page')
        					);
    }
}
