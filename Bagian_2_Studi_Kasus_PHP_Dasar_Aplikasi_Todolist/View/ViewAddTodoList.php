<?php 

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "Helper/Input.php";


function viewAddTodoList(){
    echo "MENAMBAH TODO" . PHP_EOL;
    $todo = input("Todo (x untuk keluar)");

    if($todo == "x") {
        echo "Batal menambahkan Todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}

?>