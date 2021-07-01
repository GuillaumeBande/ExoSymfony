<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    //Je créé la "route" pour définir quel chemin http va prendre ma page
/**
* @Route("/articles", name="articles")
*/
    //Je créé la fonction Articles
    public function articles() {
        //Je retourne la réponse http du serveur au navigateur
        return new Response(articles);
    }
}

?>
