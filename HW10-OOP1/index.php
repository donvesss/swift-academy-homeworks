<?php

//Ex.1 =======================================
echo 'EX.1<br>';

class Dog{
    
    public $coatColor;
    public $breed;
    public $eyesColor;
    public $coatLength;
    
    public function walk() {
        return 1;
    }
    public function run() {
        echo 'The dog can run';
    }
    public function bark() {
        echo 'The dog can bark';
    }
    public function bite() {
        echo 'The dog can bite';
    }
    public function drink_water() {
        echo 'The dog can drink water';
    }
    public function eat() {
        echo 'The dog can eat';
    }
    
}

$pitbull = new Dog();
$pitbull->run();
echo '<br>';
$pitbull->bark();
echo '<br>';
$pitbull->bite();
echo '<br>';
$pitbull->eat();


//Ex.2 =======================================
echo '<br>EX.2<br>';


class Human{
    public $sex; 
    public $weight;
    public $growth;
    public $dog;
    
    public function __construct($dog, $sex, $weight, $growth) {
        $this->sex = $sex;
        $this->weight = $weight;
        $this->growth = $growth;
        $this->dog = $dog = new Dog();
    }
    
    public function walk() {
        echo 'The human can walk <br>';  
    }
    public function run() {
        echo 'The human can run <br>';
    }
    public function eat() {
        echo 'The human can eat <br>';
    }
    public function speak() {
        echo 'The human can speak <br>';
    }
    public function meet() {
        if ($this->sex == 'male'){
            echo 'The man can meet with women <br>';
        }
        if ($this->sex == 'female'){
            echo 'The woman can meet with men <br>';
        }
            
        
    }
}

$Gosho = new Human('buldog', 'male', '70', '170');
echo $Gosho->walk();
echo $Gosho->run();
echo $Gosho->speak();
echo $Gosho->meet();



//Ex.3 =======================================
echo '<br>EX.3<br>';

$ivancho = new Human('pitbul','male','80','180');
$mariika = new Human('pincher','female', '50', '160');

if(($ivancho->dog->walk() == 1) && ($mariika->dog->walk() == 1) &&
   ($ivancho->sex != $mariika->sex) )
    {
        echo 'They can meet';
    }
    else{
        echo 'They can not meet';
    }
    
    





