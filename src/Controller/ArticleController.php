<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    private $articles = [
        1 => [
            "title" => "La vaccination c'est trop géniale",
            "content" => "bablablblalba",
            "id" => 1,
            "published" => true,
        ],
        2 => [
            "title" => "La vaccination c'est pas trop géniale",
            "content" => "blablablabla",
            "id" => 2,
            "published" => true
        ],
        3 => [
            "title" => "Balkany c'est trop génial",
            "content" => "balblalblalb",
            "id" => 3,
            "published" => false
        ],
        4 => [
            "title" => "Balkany c'est pas trop génial",
            "content" => "balblalblalb",
            "id" => 4,
            "published" => true
        ],
        5 => [
            "title" => "Le PHP c'est trop génial",
            "content" => "balblalblalb",
            "id" => 5,
            "published" => true
        ],
        6 => [
            "title" => "Symfony c'est trop génial",
            "content" => "balblalblalb",
            "id" => 6,
            "published" => true
        ]
    ];


    /**
     * @Route("/articles", name="articleList")
     */
    public function articleList(): Response
    {
        return $this->render('article_list.html.twig', [
            'articles' => $this->articles
        ]);
    }

    /**
     * @Route("/articles/{id}", name="articleShow")
     */
    public function articleShow($id): Response
    {
        // j'utilise la méthode render de l'AbstractController
        // pour récupérer un fichier Twig, le transformer en HTML
        // et le renvoyer en réponse HTTP au navigateur
        // Pour utiliser des variables dans le fichier twig, je dois
        // lui passer un tableau en second parametre, avec toutes les
        // variables que je veux utiliser
        return $this->render('article_show.html.twig', [
            'article' => $this->articles[$id]
        ]);
    }

}