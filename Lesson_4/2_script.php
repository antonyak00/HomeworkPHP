<?php

$fileTmpPath = $_FILES['file']['tmp_name'];
$fileName = $_FILES['file']['name'];
$fileSize = $_FILES['file']['size'];
$fileType = $_FILES['file']['type'];

$types = ['image/gif', 'image/png', 'image/jpeg'];

if (!in_array($_FILES['file']['type'], $types))
    die('Запрещённый тип файла.');

if (move_uploaded_file($fileTmpPath, __DIR__ . '/images/' . $fileName)) {
    echo('Ваша помойка загружена, смотрите в папке');
} else {
    echo('Не получилось загрузить вашу помойку, попробуйте еще раз');
}
?>
<head>
<meta http-equiv="refresh" content="3;URL=2.php" />
</head>

