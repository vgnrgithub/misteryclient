<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SurveyController extends Controller {
    /**
     * @Route("/survey/show", name="show_survey")
     */
    public function viewAction() {
        
        return $this -> render('AppBundle:Survey:view.html.twig', array(
        // ...
        ));
    }

    /**
     * @Route("/survey/submit")
     */
    public function submitAction() {
        return $this -> render('AppBundle:Survey:submit.html.twig', array(
        // ...
        ));
    }

}
