<?php
session_start();
$connection = new PDO('mysql:host=localhost; dbname=academy; charset=utf8', 'root', '');
$login = $connection->query('SELECT * FROM login');
if ($_SESSION['login']) {
    header('Location: content.php');
    die();

}
if ($_POST['login']) {
    foreach ($login as $log) {
        if ($_POST['login'] == $log['name'] && $_POST['password'] == $log['pass']) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['color'] = $_POST['color'];
            header('Location: content.php');
        }
    }
    echo "<p class='error'>Логин или пароль неверные</p><br>";
    echo "<p class='registration'><a href='registration.php'>Вы можете зарегистрироваться здесь</a></p><br>";
}

?>

<style>
    body {
      display: flex;
      flex-direction: column;
    }
    input, p, label, select {
        font-size: 25px;
        margin: 10px;
    }
    form {
      order: -1;
    }
    .send {
      width: 300px;
      height: 55px;
      background-color: #2aabd2;
    }
    .error {
      color: red;
    }
    .registration {
      text-decoration: none;
    }
</style>

<form action="#" method="post">
    <p>Авторизуйтесь</p>
    <input type="text" name="login" required placeholder="Логин">
    <input type="password" name="password" required placeholder="Пароль"><br>
    <label for="color">Выберите ваш любимый цвет:</label>
    <select name="color" id="color">
      <option value="red">Красный</option>
      <option value="green">Зеленый</option>
      <option value="blue">Синий</option>
      <option value="yellow">Желтый</option>
      <option value="orange">Оранжевый</option>
    </select><br>
    <input class="send" type="submit">
</form>

