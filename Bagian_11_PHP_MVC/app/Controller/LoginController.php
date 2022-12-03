<?php

namespace MMuslimAbdulJ\Belajar\PHP\MVC\Controller;

use MMuslimAbdulJ\Belajar\PHP\MVC\App\View;

class LoginController {
    public function login() : void {
        $model = [
            "message" => "Halaman ini masih dalam tahap pembuatan"
        ];
        View::render('Login/index', $model);
    }
}

?>