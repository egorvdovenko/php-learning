<?php
  session_start();

  $_SESSION['logged_in'] = false;

  if (isset($_POST['submit'])) {
    if (
      (isset($_POST['login']) && $_POST['login'] == "user") && 
      (isset($_POST['password']) && $_POST['password'] == "qwerty")
    ) {
      $_SESSION['logged_in'] = true;
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Лабораторная работа №5</title>
  </head>
  <body>
    <?php
      if ($_SESSION['logged_in']) { 
          // Показать форму загрузки картинки
          echo '<form action="upload.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="image" accept="image/png, image/jpeg" required>
                  <input type="submit" name="upload" value="Submit">
                </form>';
        } else { 
          // Показать форму входа
          echo "<form class='login_form' action='login.php' method='post'>
                  <input type='text' name='login'>
                  <input type='password' name='password'>
                  <input type='submit' name='submit' value='Login'>
                </form>";
        }
    ?>
  </body>
</html>
