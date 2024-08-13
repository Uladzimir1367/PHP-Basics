<?php

require_once './vendor/autoload.php';
require_once './src/App.php';

use App\Controller\UserController;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$app = new App();
$twig = $app->getTwig();

try {
   $controller = $_GET['controller'] ?? 'home';
   $action = $_GET['action'] ?? 'index';

   if ($controller === 'user' && $action === 'save') {
      $userController = new UserController();
      $userController->save();
   } else {
      throw new Exception('Controller not found');
   }
} catch (Exception $e) {
   header("HTTP/1.0 404 Not Found");
   echo $twig->render('error.twig');
}
