<?php
echo "Hi!<br>";
$a = 2;
$b = 'a';
echo $$b."<br>";
$b = 'Hello,';
$a = ' World!';
echo $b.$a."<br>";
$frameworks = array("Java"=>"Spring", "Python"=>"Django", "PHP"=>"Laravel");
foreach ($frameworks as $key=>$value):
    echo $key.": ".$value."<br>";
endforeach;

$s = implode(" ", array("I", "want", "a", "red", "apple"));
echo $s."<br>";
foreach (explode(" " ,$s) as $word) {
    echo $word."<br>";
}
$a = 2;
$b = '02';
echo $a + $b;
if ($a == $b) {
    echo "<br>equal<br>";
}
if ($a !== $b) {
    echo "not equal<br>";
}

class Product {
    private $name;
    private $price;

    /**
     * @param $name
     * @param $price
     */
    public function __construct($name, $price)
    {
        echo "Parent<br>";
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }
}

class Clothes extends Product {
    private $color;

    /**
     * @param $color
     */
    public function __construct($color, $name, $price)
    {
        echo "Child<br>";
        parent::__construct($name, $price);
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }
}

$skirt = new Clothes("Red", "Skirt", "85");
echo $skirt->getName()."<br>";

class Singleton {
    private static $instance;
    private $parameter;

    private function __construct($param) {
        self::$parameter = $param;
    }

    public static function getInstance($param): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new Singleton($param);
        }
        return self::$instance;
    }
}

