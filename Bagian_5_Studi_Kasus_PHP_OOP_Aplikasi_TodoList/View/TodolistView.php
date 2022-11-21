<?php

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;
    class TodolistView
    {
        private TodolistService $todolistService;
        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }
        public function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodolist();
                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = InputHelper::inputHelper("Pilih");

                if ($pilihan == "1") {
                   $this->addTodolist();
                } else if ($pilihan == "2") {
                    $this->removeTodolist();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan yang anda masukkan tidak valid" . PHP_EOL;
                }
            }
            echo "Sampai jumpa lagi." . PHP_EOL;
        }
        public function addTodolist(): void
        {
            echo "MENAMBAH TODO" . PHP_EOL;
            $todo = InputHelper::inputHelper("Todo (x untuk keluar)");

            if ($todo == "x"
            ) {
                echo "Batal menambahkan Todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }
        public function removeTodolist(): void
        {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::inputHelper("Nomor (x untuk membatalkan)");

            if ($pilihan == "x") {
                echo "Batal menghapus    Todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}
