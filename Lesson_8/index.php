<?php
require_once __DIR__ . '/DB.php';

$sql = 'SELECT * FROM test';

$db = new DB;
$db = $db->excute($sql);

var_dump($db);