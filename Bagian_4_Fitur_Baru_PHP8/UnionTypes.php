<?php 
class Example {
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "Muslim";
$example->data = 1;
$example->data = true;
$example->data = [1,2,3,4,5];

function sampleFunction(string|array $data) : string|array {
    if(is_string($data)){
        return "Argument is a String";
    } else if (is_array($data)) {
        return ["Argument is an Array"];
    }
}

var_dump(sampleFunction("Muslim"));
var_dump(sampleFunction([]));
