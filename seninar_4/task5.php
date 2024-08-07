<?php
function power($val, $pow)
{
   if ($pow == 0) {
      return 1; // Любое число в степени 0 равно 1
   } elseif ($pow > 0) {
      return $val * power($val, $pow - 1); // Рекурсивное умножение
   } else {
      return 1 / power($val, -$pow); // Обработка отрицательных степеней
   }
}

// Примеры использования функции
//echo power(2, 3); // Вывод: 8
//echo power(5, 0); // Вывод: 1
echo power(2, -2); // Вывод: 0.25
