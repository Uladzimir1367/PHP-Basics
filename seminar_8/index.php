<?php

require_once __DIR__ . '/classes/AbstractBook.php';
require_once __DIR__ . '/classes/Book.php';
require_once __DIR__ . '/classes/DigitalBook.php';
require_once __DIR__ . '/classes/PhysicalBook.php';
require_once __DIR__ . '/classes/AudioBook.php';
require_once __DIR__ . '/classes/Magazine.php';

$digitalBook = new DigitalBook("Digital Book Title", ["Author One", "Author Two"], "http://downloadlink.com", "Full text of the book");
$physicalBook = new PhysicalBook("Physical Book Title", ["Author One", "Author Two"], "123 Library St.");
$audioBook = new AudioBook("Audio Book Title", ["Author One"], "1122334455", 300, 2020, "Description", "Shelf 3", 120, "Narrator Name");
$magazine = new Magazine("Magazine Title", ["Author One"], "6677889900", 50, 2021, "Description", "Shelf 4", 5, "August");

echo $digitalBook->getOnHand(); // Выведет: http://downloadlink.com
//echo $physicalBook->getOnHand(); // Выведет: 123 Library St.
//echo $audioBook->getNarrator(); // Выведет: Narrator Name
//echo $magazine->getMonth(); // Выведет: August