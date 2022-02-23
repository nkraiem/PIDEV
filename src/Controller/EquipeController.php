<?php

namespace App\Controller;



use App\Entity\Equipes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EquipesRepository;



class EquipeController extends  AbstractController
{
    /**
     * @Route("/equipes", name="equipes")
     */
    public function afficher()
    {
        $equipe = $this->getDoctrine()->getRepository(Equipes::class)->findAll();

        return $this->render('equipe/equipe.html.twig', [
            'equipes' => $equipe ]);
    }

    /**
     * @Route("/supprimerequipe/{idequipe}", name="supprimerequipe")
     */
    public
    function supprimerEquipes($idequipe):RedirectResponse
    {
        $equipe = $this->getDoctrine()->getRepository(Equipes::class)->find($idequipe);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($equipe);
        $entityManager->flush();

        return $this->redirectToRoute('equipes');
    }
    /**
     * @Route("/ajoutequipes", name="ajoutequipes")
     */
    public function ajout(Request $request): Response
    {
        if ($request->getMethod() == 'POST') {
            $equipe = new Equipes();
            $equipe->setNom($request->get('nom'));
            $equipe->setNbrVic($request->get('nbrvic'));
            $equipe-> setNbrPer($request->get('nbrper'));
            $equipe->setNbrNull($request->get('nbrnull'));


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($equipe);
            $entityManager->flush();
            return $this->redirectToRoute('equipes'
            );
        }
        return $this->render('equipe/ajoutequipes.html.twig'
        );
    }
    /**
     * @Route("/modifequipes/{id_eq}", name="modifequipes")
     */
    public function modifier(Request $request, $id_eq): Response
    {
        $equipe = $this->getDoctrine()->getRepository(Equipes::class)->find($id_eq);

        if ($request->getMethod() == 'POST') {
            $equipe->setNom($request->get('nom'));
            $equipe->setNbrVic($request->get('nbrvic'));
            $equipe-> setNbrPer($request->get('nbrper'));
            $equipe->setNbrNull($request->get('nbrnull'));


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($equipe);
            $entityManager->flush();
            return $this->redirectToRoute('equipes'
            );
        }
        return $this->render('equipe/modifequipes.html.twig'
            ,[
            'equipes' => $equipe
        ]);
    }
}

