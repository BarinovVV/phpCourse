<?php
$connection = new PDO('mysql:host=localhost; dbname=academy; charset=utf8', 'root', '');


if (isset($_POST['submit'])) {
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    
    $fileExtension = strtolower(end(explode('.', $fileName)));
    $fileName = explode('.', $fileName)[0];
    $extensions = ['jpg', 'png', 'jpeg', 'pdf'];
    
    if (in_array($fileExtension, $extensions)) {
        if ($fileSize < 5000000) {
            if ($fileError === 0) {
                $connection->query("INSERT INTO `images`(`imgname`, `extension`) VALUES ('$fileName', '$fileExtension') ");
                $lastID = $connection->query("SELECT MAX(idimages) FROM `images`");
                $lastID = $lastID->fetchAll();
                $lastID = $lastID[0][0];
                $fileNameNew = $lastID . $fileName . '.' . $fileExtension;
                $fileDestination = 'upload/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "Загрузка прошла успешно";
            } else {

                echo "Что-то пошло не так";
            }

        } else {
            echo "Слишком большой размер файла";

        }

    } else {
        echo "Неверное расширение файла";
    }

}
echo "<h1>Домашнее задание урок 12</h1>";

echo "<pre>";
var_dump($_FILES);
echo "</pre>";

?>

<style>
    input, button {
        margin: 10px;
        font-size: 25px;
    }

</style>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="" required><br>
<!--    <input type="file" name="file2" id="" required><br>-->
    <button name="submit">Отправить</button>
</form>
