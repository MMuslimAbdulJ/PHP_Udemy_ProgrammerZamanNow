<?php 
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Muslim");
var_dump($company);

$company = new Company();
$company->programmer = new FrontEndProgrammer("Muslim");
var_dump($company);

$company = new Company();
$company->programmer = new BackEndProgrammer("Muslim");
var_dump($company);

sayHelloProgrammer(new Programmer("Muslim"));
sayHelloProgrammer(new FrontEndProgrammer("Muslim"));
sayHelloProgrammer(new BackEndProgrammer("Muslim"));

?>