<?php
  // устанавливаем тип содержимого
  header('content-type: image/jpeg');

  $im = imagecreatefromjpeg("./cat.jpg");

  // вывод изображения на экран
  imagefilter($im, IMG_FILTER_GRAYSCALE);
  imagejpeg($im);
  // очистка памяти
  imagedestroy($im);
?>
