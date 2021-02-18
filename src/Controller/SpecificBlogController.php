<?php


namespace App\Controller;


use App\Entity\Blog;
use App\Entity\NewBlog;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SpecificBlogController extends AbstractController
{
    /**
     * @Route("/blog/{id}",name="specific_blog")
     */
    public function specificBlog($id){

        $data = $this->getDoctrine()
            ->getRepository(NewBlog::class)
            ->find($id);

        if (!$data) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

//        return new Response('Check out this great product: '.$product->getName())

        return $this->render('blog/blog.html.twig',[
            'spec_data'=> $data
        ]);
    }


}