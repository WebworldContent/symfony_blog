<?php

namespace App\Controller;

use App\Entity\Blog;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        $data = $this->getDoctrine()
            ->getRepository(Blog::class)
            ->findAll();

        if (!$data) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }
        // dump($data);
//        return new Response('Check out this great product: '.$product->getName())
        return $this->render('blog/index.html.twig',[
            "blog_data"=>$data
        ]);
    }
}
