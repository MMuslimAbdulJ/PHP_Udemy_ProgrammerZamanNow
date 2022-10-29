<?php 
require_once "View/ViewShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Muslim");
addTodoList("Danny");
addTodoList("Ikhlash");
addTodoList("Arfah");

viewShowTodoList();
?>