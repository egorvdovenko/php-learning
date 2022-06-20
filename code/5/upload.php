<?php
  session_start();

  // Проверка валидного пользователя
  if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login.php');
  }

  // Проверка загруженного файла
  // Передаваемые файлы хранятся в $_FILES
  if (isset($_POST['upload'])) {
    $file_name = $_FILES['image']['name'];
    $file_tmpname = $_FILES['image']['tmp_name'];

    move_uploaded_file($file_tmpname,'dir_upload/'.$file_name); // Загружаем картинку в dir_upload

    $_SESSION['uploaded_file_name'] = $file_name; // передаем имя картинки
    $_SESSION['uploaded_file_type'] = $_FILES['image']['type']; // передаем тип картинки
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Лабораторная работа №5</title>
  </head>
  <body>
    <img 
      src="dir_upload/<?php echo $file_name;?>" 
      alt="picture" 
      width="400px" 
      height="350px"
    >
    <p>Список фильтров:</p>
    <p>
      <a href="./filter.php?type=1" target="_blank">Reversed colors</a>
    </p>
    <p>
      <a href="./filter.php?type=2" target="_blank">Gray image</a>
    </p>
    <p>
      <a href="./filter.php?type=3" target="_blank">Embossed image</a>
    </p>
    <p>
      <a href="./filter.php?type=4" target="_blank">Edge Detect effect</a>
    </p>
  </body>
</html>
