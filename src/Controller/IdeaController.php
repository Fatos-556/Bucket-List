<?php

namespace App\Controller;

use App\Entity\Idea;
use App\Form\IdeaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IdeaController extends AbstractController
{
    /**
     * @Route("/list", name="idea_list"),
     *    requirements={"id":"\d+"},
     *     methods={"GET"})
     */
    public function list(): Response
    {
        $ideaRepo = $this->getDoctrine()->getRepository(Idea::class);
        $ideas = $ideaRepo->categorie();

        return $this->render('idea/list.html.twig', [
           "ideas" => $ideas
        ]);
    }

    /**
     * @Route ("/list/{id}", name="idea_detail",
     *     requirements={"id":"\d+"},
     *     methods={"GET"})
     */
    public function detail($id, Request $request){
        $ideaRepo = $this->getDoctrine()->getRepository(Idea::class);
        $ideas = $ideaRepo->find($id);

        if(empty($ideas)){
            throw $this->createNotFoundException("This idée do not exists!");
        }

        return $this->render('idea/detail.html.twig', ["ideas"=>$ideas] );
    }

    /**
     * @Route ("/list/add", name="idea_add")

     */
    public function add(EntityManagerInterface $em, Request $request){
        $idea = new Idea();
        $idea->setDateCreated(new \DateTime());
        $IdeaForm = $this->createForm(IdeaType::class, $idea );

        $IdeaForm->handleRequest($request);

        if($IdeaForm->isSubmitted() && $IdeaForm->isValid()){
            $em->persist($idea);
            $em->flush();


            $this->addFlash("succes", 'Votre idée est bien rajouté');
            return $this->redirectToRoute('idea_detail', ['id' => $idea->getId()]);
        }
        return $this-> render ('idea/add.html.twig', [
            "IdeaForm"=>$IdeaForm->createView()
        ]);

    }
    /**
     * @Route ("/list/modify/{id}", name="idea_modify", requirements={"id": "\d+"})

     */
    public function modify(EntityManagerInterface $em, Request $request, Idea $idea){

        $IdeaForm = $this->createForm(IdeaType::class, $idea );

        $IdeaForm->handleRequest($request);

        if($IdeaForm->isSubmitted() && $IdeaForm->isValid()){
            $em->persist($idea);
            $em->flush();


            $this->addFlash("succes", 'Votre idée est modifiée');
            return $this->redirectToRoute('idea_detail', ['id' => $idea->getId()]);
        }
        return $this-> render ('idea/modify.html.twig', [
            "IdeaForm"=>$IdeaForm->createView()
        ]);

    }



}
