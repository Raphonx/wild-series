<?php
// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/wild")
 */

Class WildController extends AbstractController
{
    /**
     * @Route ("/", name="wild_index")
     * @return Response
     */

    public function index() : Response
    {
        return $this->render('wild/index.html.twig', [
            'website' => 'Wild Séries']);
    }

    /**
     * @Route("/show/{slug}", requirements={"slug" = "^[a-z\d\-]+$"}, name="wild_show")
     */
    public function show(string $slug) : Response
    {
        $slug = ucwords($slug, "-");
        $slug = preg_replace("/-/", " ", $slug);
        return $this->render('wild/show.html.twig', ['slug' => $slug]);
    }
}
