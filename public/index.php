<?php

use Twig\Environment as EnvironmentAlias;
use Twig\Loader\FilesystemLoader as FilesystemLoaderAlias;

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new FilesystemLoaderAlias(__DIR__ . '/../src/View');
$twig = new EnvironmentAlias($loader, []);

$products = ['Mac', 'iPad', 'iPhone', 'Watch', 'TV', 'Music', 'Care'];

echo $twig->render('index.html.twig', [
    'products' => $products
]);