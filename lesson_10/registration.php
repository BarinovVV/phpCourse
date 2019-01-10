<?php
//session_start();
$connection = new PDO('mysql:host=localhost; dbname=academy; charset=utf8', 'root', '');
$checkLogin = $connection->query('SELECT * FROM login');


if ($_POST['newLogin']) {
    $newLogin = $_POST['newLogin'];
//    foreach ($checkLogin as $log) {
//        if ($newLogin == $log['name']) {
//            echo "<p class='error'>Пользователь с таким логином уже зарегистрирован!</p><br>";
//            header('Location: registration.php');
////            die();
//
//        }
//    }
    $newPassword = $_POST['newPassword'];
    $newPasswordRepeat = $_POST['newPasswordRepeat'];
    if ($newPassword === $newPasswordRepeat) {
        $connection->query("INSERT INTO `login`(`name`, `pass`) VALUES ('$newLogin', '$newPassword')");
//        session_destroy();
        header('Location: login.php');

    } else {
        echo "<p class='error'>Пароли не совпадают!</p><br>";
//        session_destroy();
    }

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
}
</style>

<form action="#" method="post">
    <p>Введите ваши регистрационные данные:</p>
    <input type="text" name="newLogin" required placeholder="Логин"><br>
    <input type="password" name="newPassword" required placeholder="Пароль"><br>
    <input type="password" name="newPasswordRepeat" required placeholder="Еще раз пароль"><br>

    <input class="send" type="submit" value="Зарегистроваться">
</form>
