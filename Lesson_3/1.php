
<body>
<form method='get'>
    <p><label>Число №1</label><input type="number" name ="number1" value="<?=$_GET["number1"]?>" </p>
    <p><label>Число №2</label><input type="number"  name ="number2" value="<?=$_GET["number2"]?>"</p>

    <div>
    <input type="radio" name="action" value="multiplication"><label>Умножение</label>
    <input type="radio" name="action" value="division"><label>Деление</label>
    <input type="radio" name="action" value="addition"><label>Сложение</label>
    <input type="radio" name="action" value="subtraction"><label>Вычитание</label></p>
    </div>

        <button>
            Посчитать
            <?php
            $filled1 = $_GET["number1"];
            $filled2 = $_GET["number2"];
            $action = $_GET["action"];
            ?>
        </button>
</form>
</body>

<?php
if ($action == 'multiplication') {
    echo ('Ваш результат: ');
    echo ($filled1*$filled2);
}

if ($action == 'division') {
    echo ('Ваш результат: ');
    echo ($filled1/$filled2);
}

if ($action == 'addition') {
    echo ('Ваш результат: ');
    echo ($filled1+$filled2);
}

if ($action == 'subtraction') {
    echo ('Ваш результат: ');
    echo ($filled1-$filled2);
}
?>