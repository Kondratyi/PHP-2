<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

$template = $twig->load('index.html.twig');

$images = [
    '../img/img-1.jpg',
    '../img/img-2.jpg',
    '../img/img-3.jpg',
    '../img/img-4.jpg',
    '../img/img-5.jpg',
    '../img/img-6.jpg',
    '../img/img-7.jpg',
    '../img/img-8.jpg',
];
echo $template->render(['images' => $images]);