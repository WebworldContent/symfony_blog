<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/",name="Admin")
     */
    public function AdminPage()
    {
        return $this->render('Admin/admin.html.twig');
    }
}