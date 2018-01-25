<?php

namespace Tekup\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller
{
    public function indexAction(Request $request)
    {
        //creation session
        $session = $request->getSession();

        if(!$session->has('mesTodos')){
            $session->getFlashBag()->add('success','Nouvelle session ouverte');
            $todos=array(
                'Jeudi'=>'cours Framework',
                'Samedi' => 'Dormir'
            );
            $session->set('mesTodos',$todos);
        }

        return $this->render('TekupFirstBundle:Todo:index.html.twig');
    }

    public function addAction(Request $request, $cle,$valeur)
    {
      $session = $request->getSession();
      //Verifier existance de la session
      if ($session->has('mesTodos')){
          // je verifie s il existe
          $todos = $session->get('mesTodos');
          if (isset($todos[$cle])){
              $message = 'le todo de cle '.$cle.' est déjà existant';
               $session->getFlashBag()->add('error',$message);
          }else{
              $todos[$cle]=$valeur;
              $session->set('mesTodos',$todos);
              $message = 'le todo de cle '.$cle.' et de valeur '.$valeur.' a été ajouté avec succés';
              $session->getFlashBag()->add('success',$message);
          }
      }else{
          $message = 'Session innexistante';
          $session->getFlashBag()->add('error',$message);
      }
        return $this->forward('TekupFirstBundle:Todo:index');
    }
}
