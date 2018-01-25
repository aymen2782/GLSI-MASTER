<?php

namespace Tekup\Seance2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TekupSeance2Bundle:Default:index.html.twig');
    }
}
