<?php

require_once __DIR__ . '/Classes/News.php';
require_once __DIR__ . '/Classes/View.php';
require_once __DIR__ . '/Classes/Article.php';

$viewExample = new View();
$viewExample->display(__DIR__ . '/data.txt');