## Урок 4. Семинар. Условия, Массивы, циклы, функции

1. ### Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return.

Запросили от пользователя данные. В терминале пользователь вводит данные и получает результат.

Наша функция принимает три параметра: два числа и строку, определяющую операцию (add, subtract, multiply, divide). В зависимости от значения третьего параметра, функция выполняет соответствующую арифметическую операцию и возвращает результат. Если операция недействительна или происходит деление на ноль, функция возвращает сообщение об ошибке.

<image src="img/Задача 1.png" alt="wind">

2. ### Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

В этом коде:

1. Мы определяем четыре функции для основных арифметических операций: add, subtract, multiply и divide.
2. Функция mathOperation принимает три параметра: два числа и строку с названием операции.
3. В зависимости от значения параметра operation, функция mathOperation вызывает соответствующую арифметическую функцию с помощью оператора switch.
4. Если операция недействительна, функция возвращает сообщение об ошибке.

<image src="img/Вторая задача.png" alt="wind">

5. ### Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким: Московская область: Москва, Зеленоград, Клин Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт Рязанская область … (названия городов можно найти на maps.yandex.ru).
   
В этом коде:

1. Объявляем массив $regions, где ключами являются названия областей, а значениями — массивы с названиями городов.
2. Используем цикл foreach для перебора массива областей.
3. Для каждого региона выводим его название и список городов, объединяя их в строку с помощью функции implode.

<image src="img/Задача 3.png" alt="wind">

4. ### Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). Написать функцию транслитерации строк.

Сначала объявим массив для транслитерации, где ключами будут буквы русского алфавита, а значениями — соответствующие латинские буквосочетания. Затем пишем функцию для транслитерации строк.

В этом коде:

1. Объявляем массив $transliterationMap, где ключами являются буквы русского алфавита, а значениями — соответствующие латинские буквосочетания.
2. Функция transliterate принимает строку на русском языке и заменяет каждую букву на соответствующее латинское буквосочетание, используя массив $transliterationMap.
3. Если буква не найдена в массиве, она остается без изменений.
4. Пример использования функции показывает, как транслитерировать строку "Пример строки".

<image src="img/Задача 4.png" alt="wind">

Для реализации данной задачи не установлено расширение mbstring для PHP в Visual Studio Code


5. ### *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

В этом коде:

1. Если степень равна 0, функция возвращает 1, так как любое число в степени 0 равно 1.
2. Если степень положительная, функция рекурсивно умножает число на результат вызова функции с уменьшенной на 1 степенью.
3. Если степень отрицательная, функция рекурсивно вычисляет положительную степень и возвращает обратное значение.

<image src="img/Задача 5.png" alt="wind">

4. ### *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты.

1. Функция getCurrentTimeWithDeclensions использует встроенные функции date('H') и date('i') для получения текущего времени в часах и минутах.
2. Вспомогательная функция getDeclension определяет правильное склонение для числительных.
3. Основная функция возвращает строку с текущим временем и правильными склонениями для часов и минут.

<image src="img/Задача 6.png" alt="wind">