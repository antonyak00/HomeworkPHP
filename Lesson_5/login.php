
<?php
if (isset($_COOKIE['login'])) {
    header('Location: http://localhost:4000/index.php');
} ?>

<body>
<form method="post" action ="index.php">
    <input type="text" name="login" placeholder="Ваш логин">
    <input type="password" name="password" placeholder="Ваш пароль">
    <input type="submit" value="Отправить" >
</form>
</body>


