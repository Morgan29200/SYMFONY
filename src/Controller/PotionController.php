<?php

namespace App\Controller;

use App\Entity\Potion;
use App\Form\PotionType;
use App\Repository\PotionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/potion")
 */
class PotionController extends AbstractController
{
    /**
     * @Route("/", name="potion_index", methods={"GET"})
     */
    public function index(PotionRepository $potionRepository): Response
    {
        return $this->render('potion/index.html.twig', [
            'potions' => $potionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="potion_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $potion = new Potion();
        $form = $this->createForm(PotionType::class, $potion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($potion);
            $entityManager->flush();

            return $this->redirectToRoute('potion_index');
        }

        return $this->render('potion/new.html.twig', [
            'potion' => $potion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="potion_show", methods={"GET"})
     */
    public function show(Potion $potion): Response
    {
        return $this->render('potion/show.html.twig', [
            'potion' => $potion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="potion_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Potion $potion): Response
    {
        $form = $this->createForm(PotionType::class, $potion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('potion_index', [
                'id' => $potion->getId(),
            ]);
        }

        return $this->render('potion/edit.html.twig', [
            'potion' => $potion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="potion_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Potion $potion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$potion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($potion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('potion_index');
    }
}
