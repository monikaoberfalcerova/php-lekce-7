<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeworkController extends AbstractController
{
    /**
     * @Route("/index", name="homework_index")
     */
    public function index()
{
    return $this->render('C:\Users\monik\PhpstormProjects\php-lekce-7\templates\homeworkindex.html.twig');

}

    /**
     * @Route("/remember", name="homework_remember")
     */

    public function remember()
    {
        return $this->render('C:\Users\monik\PhpstormProjects\php-lekce-7\templates\homeworkremember.html.twig');
    }

/**
 * @Route("/pythagoras", name="homework_pythagoras")
 */
    public function pythagoras()
{
    return $this->render('C:\Users\monik\PhpstormProjects\php-lekce-7\templates\pythagoras.html.twig');
}
}


