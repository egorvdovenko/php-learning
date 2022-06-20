<?php
  // устанавливаем тип содержимого
  header('content-type: image/jpeg');

  $im = imagecreatetruecolor(200, 200);
  $blue = imagecolorallocate($im, 0, 0, 255);
  $red = imagecolorallocate($im, 255, 0, 0);
  $green = imagecolorallocate($im, 0, 255, 0);

  imagefilledrectangle($im, 75, 190, 125,140, $blue); // прямоугольник
  imagefilledellipse($im, 100, 100, 40, 40, $red); // круг

  // массив точек для треугольника
  $values = array(
    100,  10,
    75,  50,
    125,  50,
  );

  // рисование треугольника
  imagefilledpolygon($im, $values, 3, $green);
  // прорисовка
  imagepng($im);
  // освобождение памяти
  imagedestroy($im);
?>
