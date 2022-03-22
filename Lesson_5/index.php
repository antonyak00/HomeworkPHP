<?php
include __DIR__ . '/functions.php';
session_start();

if ((!isset($_COOKIE['login'])) and (checkPassword($_POST['login'], $_POST['password']))){
    setcookie('login', $_POST['login']);
    echo 'Вы авторизированы';
    $_SESSION["login"] = $_POST['login'];
}
else{
    echo 'Вы не авторизированы. Попробуйте еще раз';
    header('Refresh: 3; url=http://localhost:4000/login.php');;
}

$files = scandir(__DIR__ . '/images');
foreach ($files as $item) {
    if (!str_starts_with($item, '.')) { ?>
        <img src="<?= '/images/' . $item ?>">
        <?php
    }
}


?>
<head>
    <style>
        img{
            width: 400px;
            height: 400px;
        }
    </style>
</head>
<body>


<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Загрузить</button>
</form>
</body>


<?php
while (!isset($_FILES)) {
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
}
?>

