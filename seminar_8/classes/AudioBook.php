<?php

require_once 'Book.php';

class AudioBook extends Book
{
   private $audioLength;
   private $narrator;

   public function __construct($title, $isbn, $authors, $pages, $year, $description, $shelfId, $audioLength, $narrator)
   {
      parent::__construct($title, $isbn, $authors, $pages, $year, $description, $shelfId);
      $this->audioLength = $audioLength;
      $this->narrator = $narrator;
   }

   public function getAudioLength()
   {
      return $this->audioLength;
   }

   public function getNarrator()
   {
      return $this->narrator;
   }
}
