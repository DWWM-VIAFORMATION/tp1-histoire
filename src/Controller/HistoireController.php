<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoireController extends AbstractController
{
    #[Route('/histoire', name: 'app_histoire_p1')]
    public function page1(): Response
    {
        return $this->render('pages/page-01.html.twig');
    }
    #[Route('/histoire/page2', name: 'app_histoire_p2')]
    public function page2(): Response
    {
        return $this->render('pages/page-02.html.twig');
    }
    #[Route('/histoire/page3', name: 'app_histoire_p3')]
    public function page3(): Response
    {
        return $this->render('pages/page-03.html.twig',[]);
    }
    #[Route('/histoire/page/{id}', name: 'app_histoire_page')]
    public function showPage($id): Response
    {
        if ($id>13)
            return $this->redirect('/histoire/fin');
        else
            return $this->render('pages/page-base.html.twig',['id'=>$id]);
    }
    #[Route('/histoire/fin', name: 'app_histoire_fin')]
    public function showEndingPage(): Response
    {

        return $this->render('last-page/last-page.html.twig');
    }
    #[Route('/histoire/12345', name: 'app_histoire_egg')]
    public function showEasterEgg(): Response
    {
    }
}
