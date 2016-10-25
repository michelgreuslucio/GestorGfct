<?php

namespace gesGfctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class empresaController extends Controller
{
    public function allAction()
    {
        $respository = $this->getDoctrine()->getRepository('gesGfctBundle:empresa');
        $emp = $respository->findAll();
        return $this->render('gesGfctBundle:Empresa:all.html.twig',array("empresas"=>$emp));

    }
}
