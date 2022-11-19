<?php 

$array = [
    "firstName" => "Muslim",
    "middleName" => "Abdul",
    "lastName" => "Jabbaar"
];

$object = (object) $array;
var_dump($object);
echo "First Name : $object->firstName" . PHP_EOL;
echo "Middle Name : $object->middleName" . PHP_EOL;
echo "Last Name : $object->lastName" . PHP_EOL;

require_once "data/Person.php";

$person = new Person("John Doe", "Cianjur");
$arrayPerson = (array) $person;
var_dump($arrayPerson);
echo "Name : " . $arrayPerson["name"] . PHP_EOL;
echo "Address : " . $arrayPerson["address"] . PHP_EOL;
?>