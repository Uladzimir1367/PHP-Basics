<?php

require_once 'AbstractBook.php';

class DigitalBook extends AbstractBook
{
   private $downloadLink;
   private $text;

   public function __construct($title, $authors, $downloadLink, $text)
   {
      parent::__construct($title, $authors);
      $this->downloadLink = $downloadLink;
      $this->text = $text;
   }

   public function getDownloadLink()
   {
      return $this->downloadLink;
   }

   public function getText()
   {
      return $this->text;
   }

   public function getOnHand()
   {
      return $this->downloadLink;
   }
}
