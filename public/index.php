<?php
require '../vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilessystemLoader;
$products = ['Banane', 'Ananas', 'Pomme', 'Melon', 'Orange'];
$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', ['products'=>$products]);