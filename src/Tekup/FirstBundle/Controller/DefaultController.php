<?php

namespace Tekup\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TekupFirstBundle:Default:index.html.twig');
    }
}
