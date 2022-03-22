<!doctype html>
<?php
$arr = [
    'image1.jpg',
    'image2.jpg',
    'image2.jpg'
]

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
<?php
foreach ($arr as $index => $item) {
    echo "<a href='2.php?id=$index'><img src='$item'></a>";
}
?>

</body>