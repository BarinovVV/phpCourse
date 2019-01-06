<?php
session_start();
if (!$_SESSION['login'] || !$_SESSION['password']) {
    header('Location: login.php');
    die();
}

if ($_POST['exit']) {
    session_destroy();
    header('Location: login.php');
}
?>

<h1>Эта страница только для авторизованных пользователей</h1>
<?= "Привет, " . $_SESSION['login'] . "<br>"?>

<form action="" method="post">
    <input type="submit" name="exit" id="" value="На страницу авторизации">
</form>
