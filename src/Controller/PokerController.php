<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController
{
    /**
     * @Route("/poker", name="poker")
     */
    public function poker()
    {
        $request = Request::createFromGlobals();
        $age = $request->query->get('age');
        if ($age >= "18") {
            return new Response("Bienvenue sur le site du Poker");
        }
        else
        {
            return new Response("Ce site n'est pas pour toi, va jouer au Pokemon !");
        }
    }
}