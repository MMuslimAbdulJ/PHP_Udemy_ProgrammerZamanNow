<?php 

class Zero {
    public array $properties;

    public function __set($name, $value) : void
    {   
        $this->properties[$name] = $value;
    }

    public function __get($name) : mixed
    {
        return $this->properties[$name];
    }

    public function __isset($name) : bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$overloading = new Zero();
$overloading->nama = "Muslim";
$overloading->nim = "217200035";
$overloading->jurusan = "Teknik Informatika";

echo "Nama : " . $overloading->nama . PHP_EOL;
echo "NIM : " . $overloading->nim . PHP_EOL;
echo "JURUSAN : " . $overloading->jurusan . PHP_EOL;
var_dump(isset($overloading->fakultas));

$overloading->hobi("Programming", "Linux", "Anime");
Zero::musik("Tame Impala", "The Beatles", "Nirvana");
?>