<?php

namespace App\Controller;

use App\Storage\UserStorage;

class UserController
{
   public function save()
   {
      $name = $_GET['name'] ?? null;
      $birthday = $_GET['birthday'] ?? null;

      if ($name && $birthday) {
         $storage = new UserStorage();
         $storage->saveUser($name, $birthday);
         echo "User saved successfully!";
      } else {
         echo "Invalid input!";
      }
   }
}
