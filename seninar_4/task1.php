<?php
function calculate($num1, $num2, $operation)
{
   switch ($operation) {
      case 'add':
         return $num1 + $num2;
      case 'subtract':
         return $num1 - $num2;
      case 'multiply':
         return $num1 * $num2;
      case 'divide':
         if ($num2 != 0) {
            return $num1 / $num2;
         } else {
            return "Error: Division by zero";
         }
      default:
         return "Error: Invalid operation";
   }
}

// Получение данных от пользователя
$num1 = readline("Введите первое число: ");
$num2 = readline("Введите второе число: ");
$operation = readline("Введите операцию (add, subtract, multiply, divide): ");

// Вывод результата
echo calculate($num1, $num2, $operation) . "\n";