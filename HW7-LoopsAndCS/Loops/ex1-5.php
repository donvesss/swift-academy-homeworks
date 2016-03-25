<?php

echo '<h1>Ex.1</h1>';

//ex.1

for($begin=100; $begin<=999; $begin++){
    if($begin <999){
        echo $begin.', ';  
    }
    else{
        echo $begin.'<br/>';
    }
}

echo '======================================================================';


echo '<h1>Ex.2</h1>';


//ex.2

for($begin1=0; $begin1<=1000; $begin1++){
    
    if(($begin1 % 3!=0) && ($begin1 % 7 !=0 )){
       if($begin1<1000){
         echo $begin1.', ';  
       }
       else{
           echo $begin1;
       }
         
    }
    
}

echo '<br/>======================================================================';


echo '<h1>Ex.3</h1>';


//ex.3

function sum($inputNumberN, $inputNumberX){

$nFac=1;
$xOnDegree=1;
$s=1;

for($i=1; $i<=$inputNumberN; $i++){
    
    $nFac = $nFac*$i;
    $xOnDegree = $inputNumberX*$xOnDegree;
    $s = $s + ($nFac/$xOnDegree);
     
}    
echo 'The result is: '. $s.'<br/>'; 
}


sum(3,2);
sum(4,3);
sum(5,-4);


echo '<br/>======================================================================';


echo '<h1>Ex.4</h1>';


//ex.4

function factorial ($inputNumber1, $inputNumber2){
  
if((1<$inputNumber1) && ($inputNumber1>$inputNumber2) && ($inputNumber1<100)){
    $fac1=1;
    $fac2=1;

for($n=1; $n<=$inputNumber1; $n++){
    $fac1=$n*$fac1;
    
}

for($i=1; $i<=$inputNumber2; $i++){
    $fac2*=$i;
}


$result = $fac1/$fac2;

echo $result.'<br/>';    
    }
    
}

factorial(5,2);
factorial(6,5);
factorial(8,3);



echo '<br/>======================================================================';


echo '<h1>Ex.5</h1>';


//ex.5


$numberOfRow=  5;
$numberOfCol=$numberOfRow;

    for($col=1;$col<=$numberOfRow;$col++){
    
    for($row=$col;$row<=$numberOfCol;$row++){
    echo $row;
    
    }  
    
    echo '<br/>';    
    $numberOfCol++;
    }