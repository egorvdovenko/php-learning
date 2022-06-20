<?php
  session_start();

  // Проверка пользователя
  if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // Перенаправляем на login.php
    header('Location: login.php');
  }

  // Проверка загруженного файла
  // Передаваемые файлы хранятся в $_FILES
  if (isset($_POST['upload'])) {
    $files_count = count($_FILES['uploaded_files']['name']);

    for ($i = 0; $i < $files_count; $i++) {
      $filename = $_FILES['uploaded_files']['name'][$i];
      $file_tmpname = $_FILES['uploaded_files']['tmp_name'][$i];

      // Загружаем картинку в files
      move_uploaded_file(
        $file_tmpname,
        'files/'.$filename
      );
      
      echo "<span style='color:red;margin-right:15px;'>".$file_tmpname."</span>";
      echo "<span style='color:green'>".$filename."</span></br>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Лабораторная работа №3</title>
  </head>
  <body>
    <form class="upload_form" action="upload.php" method="post" enctype='multipart/form-data'>
      <input type="file" name="uploaded_files[]" required multiple>
      <input type="submit" name="upload" value="submit">
    </form>
    <a href="login.php">Login</a><br>
    <a href="info.php">Info</a>
  </body>
</html>
