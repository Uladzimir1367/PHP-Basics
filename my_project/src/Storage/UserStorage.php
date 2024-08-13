<?php

namespace App\Storage;

class UserStorage
{
   private $users = [];

   public function saveUser($name, $birthday)
   {
      $this->users[] = ['name' => $name, 'birthday' => $birthday];
      // Here you can add code to save the user to a database or file
   }
}
