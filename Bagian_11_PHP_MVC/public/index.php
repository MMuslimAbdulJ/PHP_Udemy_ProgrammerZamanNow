<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MMuslimAbdulJ\Belajar\PHP\MVC\App\Router;
use MMuslimAbdulJ\Belajar\PHP\MVC\Controller\HomeController;
use MMuslimAbdulJ\Belajar\PHP\MVC\Controller\ProductController;
use MMuslimAbdulJ\Belajar\PHP\MVC\Controller\LoginController;
use MMuslimAbdulJ\Belajar\PHP\MVC\Middleware\AuthMiddleware;

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/login', LoginController::class, 'login');
Router::add('GET', '/about', HomeController::class, 'about', [AuthMiddleware::class]);

Router::run();