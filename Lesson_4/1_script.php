<?php

function readAndReturnFile()
{
    $path = __DIR__ . '/data.txt';
    $lines = file($path);
    return $lines;
}

$field1 = $_GET['name'];
$field2 = $_GET['surname'];

$file = fopen(__DIR__ . '/data.txt', 'a+');
fwrite($file, $field1 . ' ' . $field2 . PHP_EOL);

foreach (readAndReturnFile() as $row) {
    echo $row . "<br>\r\n";
};
?>
<form action="1.php">
    <button>
        Вернуться назад
    </button>
</form>

