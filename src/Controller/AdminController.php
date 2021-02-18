<?php


namespace App\Controller;


use App\Entity\Blog;
use App\Entity\NewBlog;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\DependencyInjection\Loader\Configurator\param;


class AdminController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(){

        return $this->render('index/index.html.twig');
    }

    /**
     * @Route("/admin",name="admin")
     */
    public function AdminPage()
    {

        return $this->render('Admin/admin.html.twig');
    }

    /**
     * @Route("/check",name="admin_check")
     */
    public function adminCheck(Request $request){

        $title = $request->request->get('title');
        $intro_content = $request->request->get('intro_content');
        $content = $request->request->get('content');


        $em = $this->getDoctrine()->getManager();


        $obj = new NewBlog();

        $obj->setTitle($title);
        $obj->setIntoContent($intro_content);
        $obj->setContent($content);

        $em->persist($obj);
        $em->flush();

//        return new Response('<h1>Data Submitted</h1>');
        return $this->redirect($this->generateUrl('blog'));
    }


}