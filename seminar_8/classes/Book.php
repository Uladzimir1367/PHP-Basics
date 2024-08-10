<?php

/**
 * 1. Придумайте класс, который описывает любую сущность из предметной области библиотеки: книга, шкаф, комната и т.п.
 *
 * 2. Описать свойства класса из п.1 (состояние).
 *
 * 3. Описать поведение класса из п.1 (методы).
 *
 * 4. Придумать наследников класса из п.1. Чем они будут отличаться?
 * 
 * 5. Создайте структуру классов ведения книжной номенклатуры.
 */


require_once 'AbstractBook.php';

class Book extends AbstractBook
{
    private $isbn;
    private $pages;
    private $year;
    private $description;
    private $shelfId;

    public function __construct($title, $authors, $isbn, $pages, $year, $description, $shelfId)
    {
        parent::__construct($title, $authors);
        $this->isbn = $isbn;
        $this->pages = $pages;
        $this->year = $year;
        $this->description = $description;
        $this->shelfId = $shelfId;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getShelfId()
    {
        return $this->shelfId;
    }

    public function getOnHand()
    {
        return "Shelf ID: " . $this->shelfId;
    }
}
