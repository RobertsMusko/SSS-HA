
<?php
class Car {
    public $model;
    public $color;
    protected $price;
    public static $wheels = 4;
    protected $batteryCapacity;

    function __construct($model, $color, $price) {
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
    }

    function get_model() {
        return $this->model;
    }

    function get_color() {
        return $this->color;
    }

    function get_price() {
        return $this->price;
    }
}

class ElectricCar extends Car {
    protected $batteryCapacity;

    function __construct($model, $color, $price, $batteryCapacity) {
        parent::__construct($model, $color, $price);
        $this->batteryCapacity = $batteryCapacity;
    }

    function get_capacity() {
        return $this->batteryCapacity;
    }
}


$Car1 = new Car("Ferrari ", "red ", "100\n");
$Car2 = new Car("Lambo ", "yellow ", "200\n" );
$Car3 = new Car("Porsche ", "black ", "90000\n");
$electriccar = new ElectricCar("Tesla ", "White ", "120000 ", "50kWh\n");

echo $Car1->get_model();
echo $Car1->get_color();


echo $Car2->get_model();
echo $Car2->get_color();    

echo $Car3->get_model();
echo $Car3->get_color();   
echo $Car3->get_price();   

echo $electriccar->get_model();
echo $electriccar->get_color();   
echo $electriccar->get_price(); 
echo $electriccar->get_capacity(); 


?>



