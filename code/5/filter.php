<?php
  session_start();

  // Проверка пользователя
  if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // Перенаправляем на login.php
    header('Location: login.php');
  }

  // Проверка имени и типа, переданного через upload.php
  if (
    !isset($_SESSION['uploaded_file_type']) || 
    !isset($_SESSION['uploaded_file_name'])
  ) {
    // Перенаправляем на upload.php
    header('Location: upload.php');
  }

  // Проверка типа фильтра
  if (isset($_GET['type'])) {
    switch ($_GET['type']) {
      case 1:
        $image_filter = IMG_FILTER_NEGATE;
        break;
      case 2:
        $image_filter = IMG_FILTER_GRAYSCALE;
        break;
      case 3:
        $image_filter = IMG_FILTER_EMBOSS;
        break;
      case 4:
        $image_filter = IMG_FILTER_EDGEDETECT;
        break;
      default:
        // Если такого типа нет
        die("Wrong type");
        break;
    }
  }

  $filter_id = $_GET['type'];
  $image_type = $_SESSION['uploaded_file_type'];
  $image_name = $_SESSION['uploaded_file_name'];

  header("Content-type:".$image_type);

  
  if ($image_type == 'image/png') {
    $image = imagecreatefrompng("./dir_upload/".$image_name);

    imagefilter($image, $image_filter); // установка фильтра
    imagepng($image, "./dir_filtered/filter_".$filter_id.$image_name); // загружаем картинку в dir_filtered
    imagepng($image); // отображение картинки
    imagedestroy($image);
  } else if ($image_type == 'image/jpeg' || $image_type == 'image/jpg') {
    $image = imagecreatefromjpeg("./dir_upload/".$image_name);

    imagefilter($image, $image_filter); // установка фильтра
    imagejpeg($image, "./dir_filtered/filter_".$filter_id.$image_name); // загружаем картинку в dir_filtered
    imagejpeg($image); // отображение картинки
    imagedestroy($image);
  }
?>
