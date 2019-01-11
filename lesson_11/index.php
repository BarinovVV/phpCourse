<?php
if ($_POST['comment']) {
    setcookie('comment', $_POST['comment'], time()+60);
    setcookie('name', $_POST['nameUser'], time()+60);
    header('Location: index.php');
}

$connection = new PDO('mysql:host=localhost; dbname=forum; charset=utf8', 'root', '');
$messages = $connection->query('SELECT * FROM comments WHERE moderation="ok" ORDER BY date DESC');

echo "<h1>Домашнее задание урок 11</h1>";
?>
<style>
  input, textarea {
    margin: 10px;
    font-size: 25px;
  }

</style>
<form action="#" method="POST">
    <input type="text" name="name" placeholder="Ваше имя" required> <br>
    <textarea name="comment"  cols="70" rows="5" placeholder="Ваше сообщение" required></textarea><br>
    <input type="submit" value="Отправить сообщение">
</form>
<hr>
<h2>Сообщения уважаемых пользователей:</h2>
<h4>Все сообщения перед публикацией модерируются!</h4>

<?
if ($_POST['name']) {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    $safe = $connection->prepare("INSERT INTO `comments`(`name`, `comment`, `date`) VALUES (:name, :comment, NOW())");
    $arr = ['name'=>$name, 'comment'=>$comment ];
    $safe->execute($arr);



}

?>

      <? foreach ($messages as $message): ?>
        <div class="messages">
           <p><?='в ' . $message['date'] . ' -  <strong>' . $message['name'] .
               ' написал: </strong>  <i>  '  . $message['comment'] . '</i>' ?></p>
          <hr>
        </div>
      <? endforeach; ?>

