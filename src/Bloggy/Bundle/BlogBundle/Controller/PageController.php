<?php

// src/Bloggy/BlogBundle/Controller/PageController.php

namespace Bloggy\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller {

    public function indexAction() {
        return $this->render('BloggyBlogBundle:Page:index.html.twig');
    }

    public function aboutAction() {
        return $this->render('BloggyBlogBundle:Page:about.html.twig');
    }
    
    public function contactAction() {
        return $this->render('BloggyBlogBundle:Page:contact.html.twig');
    }
    
}