<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * @route("/" , name="home")
     */
    public function home() {
        var_dump('accueil') ;
    }

    /**
     * @Route("/MentionLegale", name="MentionLegale"
     */
    public function MentionLegale()
    {
        var_dump('MentionLegale') ;
    }
}

?>