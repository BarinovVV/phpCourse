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
<style>
  body {
    background-color: <?=$_SESSION['color'];?>;
  }
</style>
<h1 style="color: #c7254e">Эта страница только для авторизованных пользователей</h1>
<?= "<h2>Привет, " . $_SESSION['login'] .  "</h2><br>"?>
<img src="11157811.jpg" alt="img">


<form action="" method="post">
    <input style="margin-top: 10px; width: 300px; height: 50px; font-size: 20px; background-color: #eea236;"
           type="submit" name="exit" id="" value="На страницу авторизации">
</form>