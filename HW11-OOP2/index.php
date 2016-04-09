<?php

//Ex.1 =======================================
echo 'EX.1<br>';

class SortElements {
    
    private $array;
    
    public function __construct($array) {
        $this->array = $array;
    }
    
    public function sort_el(){
        
       sort($this->array);
       return $this->array;
       
    }
    
    
}

$test = new SortElements([30,5,6,4,8]);

var_dump($test->sort_el()); 

//Ex.2 =======================================
echo '<br>EX.2<br>';



class Factorial  {
    
    private $n;
    private $i=1;
    private $factorial=1;


    public function __construct($n) {
        $this->n = $n;
        
    }
    public function factorial() {
        
        for($this->i=1; $this->i <= $this->n; $this->i++){
            $this->factorial = $this->factorial*$this->i;
            
        }
        return $this->factorial;
    }
}

$test2 = new Factorial(5);
echo $test2->factorial();


//Ex.3 =======================================
echo '<br>EX.3<br>';

class Vehicles{
    private $name;
    private $type;
    private $make;
    private $model;
    private $country;
    private $price;
    
    public function __construct($name,$type,$make,$model,$country,$price) {
        $this->name = $name;
        $this->type = $type;
        $this->make = $make;
        $this->model = $model;
        $this->country = $country;
        $this->price = $price;
    }
    
    public function move() {
        echo $this->name . ' can move <br>';
    }
    public function stop() {
        echo $this->name . ' can stop <br>';
    }
    public function fly() {
        if ($this->type == 'flying'){
            echo $this->name . ' can fly <br>';
        }
        else{
            echo $this->name . ' can not fly <br>'; 
        }    
    }
    public function swim() {
        if ($this->type == 'floathing'){
            echo $this->name . ' can swim <br>';
        }
        else {
            echo $this->name . ' can not swim <br>';
        }    
    }
    public function transporting_passengers() {
        echo $this->name . ' can transporting passengers';
    }
    
    
}

$ship = new Vehicles('plane', 'flying' , 'unknown', 'unknown', 'Bulgaria', '1 000 000');

echo $ship->move(), $ship->stop(), $ship->fly(), $ship->swim(), $ship->transporting_passengers();       


//Ex.4 =======================================
echo '<br>EX.4<br>';

class MobileTelephone{
    
    private $model;
    private $maker;
    private $owner;
    private $battery;
    private $display;
    
    public function __construct($model, $maker, $owner, $battery, $display) {
        $this->model = $model;
        $this->maker = $maker;
        $this->owner = $owner;
        $this->battery = $battery;
        $this->display = $display;
    }
       
}

$tel1 = new MobileTelephone('S6','Samsung','Gosho','Li-ion', '5.1" Super AMOLED');
$tel2 = new MobileTelephone('S5','Samsung','Pesho','Li-ion', '4.8" ');
$tel3 = new MobileTelephone('S4','Samsung','Tosho','Li-ion', '4.2" ');

var_dump($tel3);