<?php
namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function ayudaAction() {
    	//return new Response('página de ayuda');
    	return $this->render('CuponOfertaBundle:Default:ayuda.html.twig');
    }

    public function meAction() {
    	//return new Response('página de ayuda');
    	return $this->render('CuponOfertaBundle:Default:me.html.twig');
    }
}
