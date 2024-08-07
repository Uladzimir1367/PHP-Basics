<?php
$transliterationMap = [
   'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
   'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
   'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
   'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ъ' => '',
   'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];

function transliterate($string)
{
   global $transliterationMap;
   $result = '';
   $length = mb_strlen($string);

   for ($i = 0; $i < $length; $i++) {
      $char = mb_substr($string, $i, 1);
      $result .= $transliterationMap[$char] ?? $char;
   }

   return $result;
}

// Пример использования функции
echo transliterate('Пример строки'); // Вывод: Primer stroki
