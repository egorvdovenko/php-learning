<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Лабораторная работа №1</title>
</head>

<body>
  <?php
    /* Описание скалярных переменных */
    $a = 15;        # целое
    $fl = 3.14;         # с плавающей точкой
    $boo = TRUE;         # boolean
    $str = "stroka";     # строка
    $nol = 0;
    $pusto = "";
    $s1 = "Переменная a = $a \n";   # разбираемая строка
    $s2 = 'Переменная a = $a \n';   # неразбираемая строка
    /* Описание массива */
    $mas = array(
      "one" => TRUE,
      1 => -20,
      "three" => 3.14
    );
    $mas[] = "two";
    $mas["four"] = 4;

    /* Описание константы */
    define("HOST", "kappa.cs.karelia.ru");

    /* Вывод значения переменной на экран */
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Номер задания</th>";
    echo "<th>Решение</th>";
    echo "<th>Результат</th>";
    echo "</tr>";
    
    // 1 задание
    echo "<tr>";
    echo "<td> 1 </td>";
    echo "<td> echo </td>";
    echo "<td> $a, $fl, $boo, $str </td>";
    echo "</tr>";

    // 2 задание
    echo "<tr>";
    echo "<td> 2 </td>";
    echo "<td> echo, settype </td>";
    echo "<td>";
      $str_copy = $str;
      settype($str_copy, "integer");
      echo ($str_copy + $a);
    echo "</td>";
    echo "</tr>";

    // 3 задание
    echo "<tr>";
    echo "<td> 3 </td>";
    echo "<td> var_dump </td>";
    echo "<td>";
      var_dump($a > $str);
      var_dump($a < $str);
      var_dump($a == $str);
      var_dump($a === $str);
    echo "</td>";
    echo "</tr>";

    // 4 задание
    echo "<tr>";
    echo "<td> 4 </td>";
    echo "<td> var_dump </td>";
    echo "<td>";
      var_dump($nol === $pusto);
      var_dump($nol == $pusto);
    echo "</td>";
    echo "</tr>";

    // 5 задание
    echo "<tr>";
    echo "<td> 5 </td>";
    echo "<td> var_dump </td>";
    echo "<td>";
      echo $s1;
      echo $s2; 
      echo "<br />";
      var_dump($s1 == $s2);
    echo "</td>";
    echo "</tr>";

    // 6 задание
    echo "<tr>";
    echo "<td> 6 </td>";
    echo "<td> var_dump </td>";
    echo "<td>";
      var_dump($mas["one"], $mas[2], $mas[3]);
    echo "</td>";
    echo "</tr>";

    // 7 задание
    echo "<tr>";
    echo "<td> 7 </td>";
    echo "<td> var_dump </td>";
    echo "<td>";
      var_dump($mas);
    echo "</td>";
    echo "</tr>";

    // 8 задание
    echo "<tr>";
    echo "<td> 8 </td>";
    echo "<td> implode </td>";
    echo "<td>";
      echo implode(', ', $mas);
    echo "</td>";
    echo "</tr>";

    // 9 задание
    echo "<tr>";
    echo "<td> 9 </td>";
    echo '<td> ${} </td>';
    echo "<td>";
      $name = "a";
      echo ${$name};
    echo "</td>";
    echo "</tr>";

    // 10 задание
    echo "<tr>";
    echo "<td> 10 </td>";
    echo "<td> & </td>";
    echo "<td>";
      $ref = &$a;
      $ref = 30;
      echo $a;
    echo "</td>";
    echo "</tr>";

    // 11 задание
    echo "<tr>";
    echo "<td> 11 </td>";
    echo "<td> constant </td>";
    echo "<td>";
      echo constant('HOST');
    echo "</td>";
    echo "</tr>";

    // 12 задание
    echo "<tr>";
    echo "<td> 12 </td>";
    echo "<td> `` </td>";
    echo "<td>";
      $file_list = `dir`;
      echo $file_list;
    echo "</td>";
    echo "</tr>";

    // 13 задание
    echo "<tr>";
    echo "<td> 13 </td>";
    echo "<td> . </td>";
    echo "<td>";
      echo gettype($str).$nol.'1';
    echo "</td>";
    echo "</tr>";

    // 14 задание
    echo "<tr>";
    echo "<td> 14 </td>";
    echo "<td> basename </td>";
    echo "<td>";
      $pg_name = basename("C:\openserver\domains\test.ru\index.php");
      echo "<a href='$pg_name'>$pg_name</a>".PHP_EOL;
    echo "</td>";
    echo "</tr>";

    // 15 задание
    echo "<tr>";
    echo "<td> 15 </td>";
    echo "<td> asort, foreach </td>";
    echo "<td>";
      $colors = array(
        "каждый" => "красный",
        "охотник" => "оранжевый",
        "желает" => "желтый",
        "знать" => "зеленый",
        "где" => "голубой",
        "сидит" => "синий",
        "фазан" => "фиолетовый"
      );

      asort($colors);
      
      foreach($colors as $color => $value) {
        echo "$color: $value <br />";
      }
    echo "</td>";
    echo "</tr>";

    // 16 задание
    echo "<tr>";
    echo "<td> 15 </td>";
    echo "<td> function </td>";
    echo "<td>";
      function f_color ($value = 1) {
        if ($value % 2 === 0) {
          echo('<p style="color: green">'.'Чётное число');
        } else {
          echo('<p style="color: red">'.'Нечётное число');
        }
      }

      f_color(2);
      f_color(3);
      f_color();
    echo "</td>";
    echo "</tr>";

    echo "</table>";
  ?>
</body>

</html>