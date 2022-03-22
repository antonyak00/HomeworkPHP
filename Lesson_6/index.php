<?php
require 'GuestBook.php';

$newName = new GuestBook(__DIR__ . '/data.txt');
$newName->getData();
$newName->append('Durak debilov');
$newName->save();
var_dump($newName);