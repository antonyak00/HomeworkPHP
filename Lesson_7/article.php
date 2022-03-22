<?php

require_once '/News.php';
require_once '/Artical.php';
require_once '/View.php';

$exampleOfNews = new News;
$exampleOfView = new View;

if (is_numeric($_POST['id'])){
    $exampleOfView->assign(0,$exampleOfNews->getArticles()[$_GET['id']]);
}

$exampleOfView->display('/Artical.php');