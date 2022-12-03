<?php
namespace MMuslimAbdulJ\Belajar\PHP\MVC\Controller;

use MMuslimAbdulJ\Belajar\PHP\MVC\App\View;

class HomeController {
    public function index() : void {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Belajar PHP MVC di Programmer Zaman Now"
        ];
        View::render('Home/index', $model);
    }
    public function hello() : void {
        $model = [
            "title" => "Hello",
            "content" => "Ini adalah hello page"
        ];
        View::render('Hello/index', $model);
    }
    public function world() : void {
        echo "HomeController.world()";
    }
    public function about() : void {
        echo "Author : M Muslim Abdul J";
    }

    public function login() : void {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password'],
        ];

        $response = [
            "message" => "Login Sukses"
        ];
    }
}
?>