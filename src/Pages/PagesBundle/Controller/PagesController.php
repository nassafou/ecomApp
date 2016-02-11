<?php

namespace Pages\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function pagesAction($id)
    {
        return $this->render('PagesBundle:Pages:layout/pages.html.twig');
    }
}
