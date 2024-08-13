<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Dotenv\Dotenv;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class App
{
   private $twig;
   private $logger;

   public function __construct()
   {
      // Инициализация Dotenv
      $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
      $dotenv->load();

      // Инициализация Twig
      $loader = new FilesystemLoader(__DIR__ . '/Template');
      $this->twig = new Environment($loader);

      // Инициализация Monolog
      $this->logger = new Logger('app');
      $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Logger::DEBUG));
   }

   public function getTwig()
   {
      return $this->twig;
   }

   public function getLogger()
   {
      return $this->logger;
   }
}
