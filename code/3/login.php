<?php
  session_start();

  $_SESSION['logged_in'] = false;

  if (isset($_POST['submit'])) {
    if (
      (isset($_POST['login']) && $_POST['login'] == "user") && 
      (isset($_POST['password']) && $_POST['password'] == "qwerty")
    ) {
      $_SESSION['logged_in'] = true;
      // Перенаправляем на info.php
      header('Location: info.php');
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
    <form class="login_form" action="login.php" method="post">
      <input type="text" name="login">
      <input type="password" name="password">
      <input type="submit" name="submit" value="Login">
    </form>
  </body>
</html>
