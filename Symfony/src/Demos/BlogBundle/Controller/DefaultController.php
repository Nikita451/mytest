<?php

namespace Demos\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Demos\BlogBundle\Entity\Post;


class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
   
   /**
   *  @Route("/hw")
   *  @Template()
   */
   public function hwAction()
   {
	$myhw = "Hello,world!!!!!";
	return array('myhw'=> $myhw);
   }
   
    /**
    * @Route("/create")
    */
    function createAction()
     {
	$post = new Post();
        $post->setTitle("My notice");
        $post->setBody("My First project on Symfony2");
	$post->setCreatedDate(new \DateTime("now"));
	$post->setUpdatedDate(new \DateTime("now"));
	
	$em = $this->getDoctrine()->getEntityManager();
	$em->persist($post);
	$em->flush();
	return new Response("Created notice id: " . $post->getId());
     }
     /**
     * @Route("/show/{id}")
     * @Template() 
     */
	function showAction($id)
	{
	 $post = $this->getDoctrine()
				->getRepository('DemosBlogBundle:Post')
				->find($id);
	 if (!$post){
	 throw $this->createNotFoundException('Строка не найдена!');
	}

	 return array('post'=> $post);	 
	}
}
