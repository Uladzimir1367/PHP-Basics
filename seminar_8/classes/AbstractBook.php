<?php

abstract class AbstractBook
{
   protected $title;
   protected $authors;
   protected $readCount;

   public function __construct($title, $authors)
   {
      $this->title = $title;
      $this->authors = $authors;
      $this->readCount = 0;
   }

   public function incrementReadCount()
   {
      $this->readCount++;
   }

   abstract public function getOnHand();
}
