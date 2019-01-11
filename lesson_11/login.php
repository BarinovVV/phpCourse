<?php
session_start();

$connection = new PDO('mysql:host=localhost; dbname=forum; charset=utf8', 'root', '');
$admins = $connection->query('SELECT * FROM admin');

if ($_POST['login']) {
    foreach ($admins as $admin) {
        if ($_POST['login'] == $admin['login'] && $_POST['pass'] == $admin['pass'] ) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['pass'] = $_POST['pass'];
            header('Location: admin.php');
        }
    }
    echo "Не правильный пароль или логин";

}
?>

<style>
  body {
    margin: 40px;
    display: flex;
    flex-direction: column;
  }
  input {
    margin: 10px;
    font-size: 25px;
  }
</style>

<h2>Вход в админку</h2>
<form action="#" method="POST">
  <input type="text" name="login" id="" placeholder="Введите логин" required><br>
  <input type="password" name="pass" id="" placeholder="Введите пароль" required><br>
  <input type="submit">
</form>



