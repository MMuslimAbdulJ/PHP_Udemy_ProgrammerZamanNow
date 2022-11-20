<?php 

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class NotBlank{

}

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class Length
{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest {
    #[NotBlank]
    #[Length(min: 4, max : 10)]
    public ?string $username;
    #[NotBlank]
    #[Length(min: 8, max: 10)]
    public ?string $password;
}

function validate(object $object) : void {
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    // var_dump($object);
    // var_dump($properties);
    foreach($properties as $property){
        validateNotBlank($property, $object); 
        validateLength($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object) : void {
    $attributes = $property->getAttributes(NotBlank::class);
    // var_dump($object);
    // var_dump($property);
    // var_dump($property->getValue($object));
    // var_dump(Length::class);
    if(count($attributes) > 0) {
        if(!$property->isInitialized($object)) {
            throw new Exception("Error: $property->name is null");
        } else if($property->getValue($object) == null) {
            throw new Exception("Error: $property->name is null");
        }
    }
}

function validateLength(ReflectionProperty $property, object $object): void
{
    if(!$property->isInitialized($object) || $property->getValue($object) == null){
        return;
    }
    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach($attributes as $attribute) {
        $length = $attribute->newInstance();
        $valueLength = strlen($value);
        if($valueLength < $length->min) {
            throw new Exception("Property $property->name is too short");
        }
        if($valueLength > $length->max) {
            throw new Exception("Property $property->name is too long");
        }
    }
}



$request = new LoginRequest();
$request->username = "Muslim";
$request->password = "r4h45144";

try {
    validate($request);
    echo "VALID" . PHP_EOL;
} catch(Exception $error) {
    echo $error->getMessage() . PHP_EOL;
}