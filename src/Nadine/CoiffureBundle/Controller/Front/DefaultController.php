<?php

namespace Nadine\CoiffureBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NadineCoiffureBundle:Front/Default:index.html.twig');
    }

    public function servicesAction()
    {
        return $this->render('NadineCoiffureBundle:Front/Default:services.html.twig');
    }

    public function contactAction()
    {
        return $this->render('NadineCoiffureBundle:Front/Default:contact.html.twig');
    }

    public function galleryAction()
    {
        return $this->render('NadineCoiffureBundle:Front/Default:gallery.html.twig');
    }
}
