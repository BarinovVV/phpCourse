<?php
if ($_POST['first'] && $_POST['second']) {
    setcookie('first', $_POST['first'], time()+5);
    setcookie('second', $_POST['second'], time()+10);
    header('Location: index.php');
}
?>

    <form action="" method="post">
        <input type="text" name="first" id="" required>
        <input type="text" name="second" id="" required>
        <button>Отправить</button>
    </form>

<?
var_dump($_COOKIE);