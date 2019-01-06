<?php
session_start();
$connection = new PDO('mysql:host=localhost; dbname=academy; charset=utf8', 'root', '');
$login = $connection->query('SELECT * FROM login');
//var_dump($login);

if ($_POST['login']) {
    foreach ($login as $log) {
        if ($_POST['login'] == $log['name'] && $_POST['password'] == $log['pass']) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            header('Location: content.php');
        }
    }
    echo "Логин или пароль неверные";
}

?>

<style>
    body {
        padding: 10%;
    }
    input, p {
        font-size: 25px;
        margin: 10px;
    }
</style>
<form action="#" method="post">
    <p>Авторизуйтесь</p>
    <input type="text" name="login" required placeholder="Логин">
    <input type="password" name="password" required placeholder="Пароль">
    <input type="submit">
</form>
