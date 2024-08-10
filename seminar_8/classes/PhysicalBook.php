<?php

require_once 'AbstractBook.php';

class PhysicalBook extends AbstractBook
{
   private $libraryAddress;

   public function __construct($title, $authors, $libraryAddress)
   {
      parent::__construct($title, $authors);
      $this->libraryAddress = $libraryAddress;
   }

   public function getOnHand()
   {
      return $this->libraryAddress;
   }
}
