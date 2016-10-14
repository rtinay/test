<?php

namespace module\ClientWebsitePortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('moduleClientWebsitePortalBundle:Default:index.html.twig');
    }
}
