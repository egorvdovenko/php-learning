<?php
  // устанавливаем тип содержимого
  header('content-type: image/jpeg');

  // открытие файла с картинкой и связываем его с идентификатором $im
  $im = imagecreatefromjpeg('./1.jpg');

  // получение пути шрифта
  $dir = dirname(realpath(__FILE__));
  $sep = DIRECTORY_SEPARATOR;
  $font = $dir.$sep.'arial.ttf';

  // создание цвета текста
  $text_color = imagecolorallocate($im, 255, 255, 255);

  $text = "ЕГЭ ПО РИСОВАНИЮ";
  $font_size = 36;
  $cord_x = 65;
  $cord_y = 380;
  $angle = 0;

  imagettftext(
    $im,
    $font_size,
    $angle,
    $cord_x,
    $cord_y,
    $text_color,
    $font,
    $text
  );

  // вывод изображения в браузер
  imagejpeg($im);
  // сохранение изображения как изображения
  imagejpeg($im, 'demotivator.jpg');
  // освобождение памяти
  imagedestroy($im);
?>
