<?php

namespace MMuslimAbdulJ\Belajar\PHP\MVC\Middleware;

class AuthMiddleware implements Middleware {
    public function before() : void {
        if(!isset($_SESSION['user'])) {
            session_start();
            header("Location: /login");
            exit();
        }
    }
}

?>