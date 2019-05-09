<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class BlogController extends AbstractController
{
    /*
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
//    /**
//     * @Route("/blog/{page<\d+>?1}", name="blog_list", requirements={"page"="\d+"})
//     */
//    public function list($page)
//    {
//        // ...
//
//        return $this->render('blog/blog.html.twig', [
//            'page' => $page,
//        ]);
//    }

    /**
     * @Route(
     *     "/articles/{_locale}/{year}/{slug}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */
    public function show($slug)
    {

        // ...

        return $this->render('blog/blog.html.twig', [
            'slug' => "slug: " . $_locale . $year . $slug
        ]);
    }
}
