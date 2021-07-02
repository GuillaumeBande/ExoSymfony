<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController
{
    /**
     * @Route("/articlelist", name="articlelist")
     */
    public function listeArticle()
    {
        //retourne une reponse http valide
        return new Response('article');
    }
    /**
     * @Route("/article/{id}", name="articleshow")
     */
    public function articlesShow($id)
    {
        $articles = [
            '1' => [
                "title" => "Titre 1",
                "content" => "blablabla",
                "id" => 1
            ],
            '2' => [
                "title" => "Titre 2",
                "content" => "blablabla",
                "id" => 2
            ],
            '3' => [
                "title" => "Titre 3",
                "content" => "blablabla",
                "id" => 3
            ]

        ];

        return $this->render('article_show.html.twig', [
            'article' => $articles[$id]
        ]);

}

}