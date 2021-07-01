<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController extends AbstractController
{
    //On défini le chemin http de la page poker
    /**
     * @Route("/poker", name="poker")
     */
    //On défini la méthode poker et on utilise "l'autowire" pour instancier automatiquement
    //la classe Request dans la variable $request
    //Pour faire ça, je mets la variable $request en paramètre
    //de ma méthode, précédé de la classe
    public function poker(Request $request)
    {
        $age = $request->query->get('age');

        //On défini une condition "SINON"
        if ($age >= "18") {
            //Si l'utilisateur a plus de 18 ans,
            //On lui souhaite la bienvenue
            return $this->redirectToRoute('Welcolme');
        }
        //Sinon
        else
        {
            //Sinon on défini et redirige vers la page mineur
            return $this->redirectToRoute('mineur');
        }
    }
    //On défini le chemin http de la page mineur
        /**
         * @Route("/mineur", name="mineur");
         */
        //On définit la méthode Mineur
        public function mineur()
    {
        //On inscrit se qu'il va y avoir dans la nouvelle page mineur
        return new Response("Retourne jouer au pokemon !");
    }
    //On défini le chemin http de la page Welcolme
    /**
     * @Route("/Welcolme", name="Welcolme");
     */
    //On défini la méthode Welcolme
    public function Welcolme()
    {
        //On inscrit se qu'il va y avoir dans la nouvelle page mineur
        return new Response("Bienvenue sur le site du Poker," . "<br>" . "Veuillez préparer votre porte feuille !");
    }

}