<?php
function add($a, $b)
{
   return $a + $b;
}

function subtract($a, $b)
{
   return $a - $b;
}

function multiply($a, $b)
{
   return $a * $b;
}

function divide($a, $b)
{
   if ($b != 0) {
      return $a / $b;
   } else {
      return "Error: Division by zero";
   }
}

function mathOperation($arg1, $arg2, $operation)
{
   switch ($operation) {
      case 'add':
         return add($arg1, $arg2);
      case 'subtract':
         return subtract($arg1, $arg2);
      case 'multiply':
         return multiply($arg1, $arg2);
      case 'divide':
         return divide($arg1, $arg2);
      default:
         return "Error: Invalid operation";
   }
}

// Примеры использования функции
//echo mathOperation(10, 5, 'add'); // Вывод: 15
//echo mathOperation(10, 5, 'subtract'); // Вывод: 5
//echo mathOperation(10, 5, 'multiply'); // Вывод: 50
echo mathOperation(10, 5, 'divide'); // Вывод: 2

//пример функции mathOperation, которая принимает три параметра: два числа и строку с названием операции. В зависимости от значения операции, функция выполняет соответствующую арифметическую операцию, используя switch:
