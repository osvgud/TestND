<?php

namespace App\Controller;

use App\Format\MoneyFormatter;
use App\Format\NumberFormatter;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index(MoneyFormatter $format)
    {
        $numb= $format->formatEur(12.005);
        dump($numb);
        $numb= $format->formatUsd(999600);
        dump($numb);
        $numb = $format->formatEur(99960);
        dump($numb);exit;
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
