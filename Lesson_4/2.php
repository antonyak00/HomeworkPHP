<?php

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


<form action="2_script.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Все ок">
</form>
</body>




