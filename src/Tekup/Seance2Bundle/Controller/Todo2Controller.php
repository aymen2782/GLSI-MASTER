<?php

namespace Tekup\Seance2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Todo2Controller extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
