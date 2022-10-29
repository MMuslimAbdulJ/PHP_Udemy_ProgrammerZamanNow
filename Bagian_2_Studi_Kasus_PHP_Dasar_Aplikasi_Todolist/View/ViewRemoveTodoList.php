<?php 
require_once "Model/TodoList.php";
require_once "Helper/Input.php";
require_once "BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList(){
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk membatalkan)");

    if($pilihan == "x") {
        echo "Batal menambahkan Todo" . PHP_EOL;
    } else {

        $success = removeTodoList($pilihan);

        if($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
?>