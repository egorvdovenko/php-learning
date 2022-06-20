<?php
  session_start();

  // Проверка пользователя
  if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // Перенаправляем на login.php
    header('Location: login.php');
  }

  $server_name = isset($_SERVER['SERVER_NAME'])
    ? $_SERVER['SERVER_NAME']
    : '';
  $http_user_agent = isset($_SERVER['HTTP_USER_AGENT'])
    ? $_SERVER['HTTP_USER_AGENT']
    : '';
  $http_referer = isset($_SERVER['HTTP_REFERER'])
    ? $_SERVER['HTTP_REFERER']
    : '';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Лабораторная работа №3</title>
  </head>
  <body>
    <div class="info_div">
        <p>
          <b>SERVER_NAME: </b>
          <?php echo $server_name; ?>
        </p>
        <p>
          <b>HTTP_USER_AGENT: </b>
          <?php echo $http_user_agent; ?>
        </p>
        <p>
          <b>HTTP_REFERER: </b>
          <?php echo $http_referer; ?>\
        </p>
        <a href="login.php">Login</a><br>
        <a href="upload.php">Upload</a>
    </div>
  </body>
</html>
