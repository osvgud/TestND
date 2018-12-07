<?php

namespace App\Controller;

use App\Format\NumberFormatter;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index(NumberFormatter $format)
    {
        $numb= $format->format(12.005);
        dump($numb);
        $numb= $format->format(999600);
        dump($numb);
        $numb = $format->format(99960);
        dump($numb);exit;
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
