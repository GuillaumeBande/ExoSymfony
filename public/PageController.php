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
* @Route("/contact", name="MentionLegale"
*/
public function contact()
{
var_dump('MentionLegale') ;
}
}

?>