<?php
session_start();
if (!$_SESSION['login'] || !$_SESSION['pass']) {
    header('Location: login.php');
    die();
}

if ($_POST['exit']) {
    session_destroy();
    header('Location: login.php');
}

if (count($_POST) > 0) {
    header('Location: admin.php');

}

$connection = new PDO('mysql:host=localhost; dbname=forum; charset=utf8', 'root', '');
$messages = $connection->query('SELECT * FROM comments WHERE moderation="new" ORDER BY date DESC');

?>

<style>
  form {
    font-size: 25px;
  }
  input, button, label, select {
    margin: 10px;
    font-size: 30px;
    padding: 5px;
  }
</style>

<h1>Админка злобного админа</h1>
<hr>

<form action="#" method="post">
    <input type="submit" name="exit" id="" value="Выйти из адмминки">
</form>


<form action="#" method="post">
    <? foreach ($messages as $message): ?>
      <select name="<?=$message['idcomments']?>" id="<?=$message['idcomments']?>">
        <option value="ok" selected>Одобрить</option>
        <option value="rejected">Отклонить</option>
      </select>
      <label for="<?=$message['idcomments']?>">
          <?='в ' . $message['date'] . ' -  <strong>' . $message['name'] .
          ' написал: </strong>  <i>  '  . $message['comment'] . '</i><br>' ?>
      </label>
    <? endforeach; ?>
  <button>Модерировать</button>
</form>

<?
foreach ($_POST as $key=>$value) {
  if ($value == 'ok') {
    $connection->query("UPDATE `comments` SET moderation='ok' WHERE idcomments=$key");
  } else {
    $connection->query("UPDATE `comments` SET moderation='rejected' WHERE idcomments=$key");
  }
}
