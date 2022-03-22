<?php

function readAndReturnFile()
{
    $path = __DIR__ . '/data.txt';
    $lines = file($path);
    return $lines;
}


foreach (readAndReturnFile() as $row){
    echo $row . "<br>\r\n";
};
?>

<form method="get" action="1_script.php"><label>Добавьте информацию о визите:</label>
    <input value="" name="name">
    <input value="" name="surname">
    <button>Добавить</button>
</form>
