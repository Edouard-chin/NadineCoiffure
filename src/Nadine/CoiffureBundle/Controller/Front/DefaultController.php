<?php

namespace Nadine\CoiffureBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NadineCoiffureBundle:Front/Default:index.html.twig');
    }
}
