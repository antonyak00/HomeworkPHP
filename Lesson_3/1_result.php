<?php

$filled1 = $_GET["number1"];
$filled2 = $_GET["number2"];
$action = $_GET["action"];

if ($action == 'multiplication') {
    echo ($filled1*$filled2);

}

if ($action == 'division') {
    echo ($filled1/$filled2);
}

if ($action == 'addition') {
    echo ($filled1+$filled2);
}

if ($action == 'subtraction') {
    echo ($filled1-$filled2);
}