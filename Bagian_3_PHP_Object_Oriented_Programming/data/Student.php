<?php 

class Student {
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample){
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }

    public function __toString()
    {
        return "Id: $this->id, Nama: $this->name, Value: $this->value";
    }

    public function __invoke(...$arguments)
    {
        echo "Invoke student with arguments: " . join("|", $arguments) . PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "nama" => $this->name,
            "value" => $this->value,
            "author" => "LinuxRanger",
            "version" => "1.0.0"
        ];
    }
}

?>