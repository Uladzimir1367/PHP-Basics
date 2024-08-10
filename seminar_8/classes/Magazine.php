<?php

require_once 'Book.php';

class Magazine extends Book
{
   private $issueNumber;
   private $month;

   public function __construct($title, $isbn, $authors, $pages, $year, $description, $shelfId, $issueNumber, $month)
   {
      parent::__construct($title, $isbn, $authors, $pages, $year, $description, $shelfId);
      $this->issueNumber = $issueNumber;
      $this->month = $month;
   }

   public function getIssueNumber()
   {
      return $this->issueNumber;
   }

   public function getMonth()
   {
      return $this->month;
   }
}
