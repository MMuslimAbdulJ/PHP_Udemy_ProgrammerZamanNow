<?php 
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";
require_once "exception/ValidationException.php";

$request = new LoginRequest();
$request->username = "Muslim";
$request->password = "Muslim";
try {
    ValidationUtil::validate($request);
    echo "VALID" . PHP_EOL;
} catch(ValidationException $error) {
    echo "Error: {$error->getTraceAsString()}" . PHP_EOL;
}

class RegisterUserRequest {
    public ?string $name;
    public ?string $email;
    public ?string $address;

}

$request = new RegisterUserRequest();
$request->name = "Muslim";
$request->email = "muslim@gmail.com";
$request->address = "Cianjur";
try {
    ValidationUtil::validateReflection($request);
    echo "VALID" . PHP_EOL;
} catch(ValidationException $error) {
    echo "Error: {$error->getMessage()}" . PHP_EOL;
}

?>