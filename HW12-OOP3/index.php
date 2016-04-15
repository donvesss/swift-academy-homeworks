<?php

//Ex.1.2 =======================================
echo 'EX.1.1<br>';

interface SoundInterface{
    public function Sound(); 
}

abstract class Animals implements SoundInterface{
    
    protected $name;
    protected $age;
    protected $sex;
    
    public function __construct($name='',$age='',$sex='') {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    
    abstract public function Sound(); 
        
}


class Dog extends Animals{
    
    public function Sound() {
        echo 'Bau-Bau';
    }
    
    public function getAge() {
        return $this->age;
    }
}

class Frog extends Animals{
    
    public function Sound() {
        echo 'Kvak-Kvak';
    }
    
    public function getAge() {
        return $this->age;
    }
}

class Cat extends Animals{
    
    public function __construct($name='',$age='') {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function Sound(){
           
    } 
    
    public function getAge() {
        return $this->age;
    }
}


class Kitten extends Cat{
    
    protected $sex = 'female';
    
    public function Sound() {
        echo 'Miu';
    }
}

class Tomcat extends Cat{
    
    protected $sex= 'male';
    
    public function Sound() {
        echo 'mrrrrrr';
    }
}
echo '==========DOG=========<br>';

$dog = new Dog('Rex', 4, 'male');
var_dump($dog);
echo '<br>';
echo $dog->Sound();
echo '<br>';

echo '===========FROG==========<br>';

$frog = new Frog('Kikerica', 4, 'female');
var_dump($frog);
echo '<br>';
echo $frog->Sound();
echo '<br>';

echo '===========KITTEN==========<br>';



$kitten = new Kitten('Maca', 2);
var_dump($kitten);
echo '<br>';
echo $kitten->Sound();
echo '<br>';


echo '===========TOMCAT==========<br>';

$tomcat = new Tomcat('Tom', 3);
var_dump($tomcat);
echo '<br>';
echo $tomcat->Sound();
echo '<br>';


//Ex.1.2 =======================================
echo 'EX.1.2<br>';


$arr = [$dog->getAge(),$frog->getAge(),$kitten->getAge(),$tomcat->getAge()];
     $average = array_sum($arr) / count($arr);
        echo $average;





