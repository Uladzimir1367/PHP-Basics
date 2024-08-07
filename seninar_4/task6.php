<?php
function getCurrentTimeWithDeclensions()
{
   $hours = date('H');
   $minutes = date('i');

   // Функция для склонения числительных
   function getDeclension($number, $one, $two, $five)
   {
      $n = abs($number) % 100;
      $n1 = $n % 10;
      if ($n > 10 && $n < 20) {
         return $five;
      }
      if ($n1 > 1 && $n1 < 5) {
         return $two;
      }
      if ($n1 == 1) {
         return $one;
      }
      return $five;
   }

   $hourDeclension = getDeclension($hours, 'час', 'часа', 'часов');
   $minuteDeclension = getDeclension($minutes, 'минута', 'минуты', 'минут');

   return "$hours $hourDeclension $minutes $minuteDeclension";
}

// Пример использования функции
echo getCurrentTimeWithDeclensions(); // Вывод: например, 22 часа 15 минут

// функция на PHP, которая вычисляет текущее время и возвращает его в формате с правильными склонениями:
