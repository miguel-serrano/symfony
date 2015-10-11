<?php

namespace Cupon\CiudadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CuponCiudadBundle:Default:index.html.twig', array('name' => $name));
    }
}
