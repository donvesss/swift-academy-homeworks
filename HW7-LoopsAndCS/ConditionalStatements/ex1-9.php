<?php

echo '<h3>Ex.1</h3>';

//Ex.1========================================

function big_number ($numberOne, $numberTwo){

    if($numberOne > $numberTwo){
    echo $numberTwo.'  <  '.$numberOne.'<br/>';
    }
    else{
    echo $numberOne.'  <  '.$numberTwo.'<br/>';
    
    }    
}

big_number(5, 2);
big_number(3, 4);
big_number(5.5, 4.5);


echo '<h3>Ex.2</h3><br>';

//Ex.2========================================

$score = 3;
$result;

if($score>=0 && $score<=3){
    $result = $score*10;
    echo $result;
}
else{
    if($score>=4 && $score<=6){
        $result = $score*15;
        echo $result;
    }
    else{
        if($score>=7 && $score<=9){
            $result = $score*20;
            echo $result;
        }
        else{
            if($score>10){
               $result = $score*100;
               echo $result;
            }
            else{
                if($score<0){
                    echo 'Invalid score';
                }
            }
        }
    }
}


echo '<h3>Ex.3</h3><br>';

//Ex.3========================================

$cards = [2,3,4,5,6,7,8,9,10,'J','Q','K','A'];

$inputValue = 'j';
$isCard=0;

foreach ($cards as $card) {

    if ($inputValue == $card){
        $isCard=1;
        break;      
    }
    
}
if ($isCard === 1){
    echo 'Is "'.$inputValue.'" a card? <br/> Yes';
}
    else{
        echo 'Is "'.$inputValue.'" a card? <br/> No';
    }


echo '<h3>Ex.4</h3><br>';

//Ex.4========================================

$num1=2;
$num2=-3;
$num3=-3;

if(($num1>0 && $num2>0 && $num3>0) || ($num1<0 && $num2<0 && $num3>0) ||
   ($num1<0 && $num2>0 && $num3<0) || ($num1>0 && $num2<0 && $num3<0) ){
    
    $result = '"+"';
}
else{
    $result = '"-"';
    }
    
    echo 'The result is :' .$result;


echo '<h3>Ex.5</h3><br>';

//Ex.5========================================


$a=1099;
$b=200;
$c=30;

if($a > $b && $a > $c){
    echo 'The biggest number is: '.$a;
    
}
else{
    if($a > $b && $c > $a){
        echo 'The biggest number is: '.$c;
    }
    else{
        if($b > $c){
            echo 'The biggest number is: '.$b;
    
        }
        else{
            echo 'The biggest number is: '.$c;
        }
    }
}


echo '<h3>Ex.6</h3><br>';

//Ex.6========================================


$biggestNumber = [1,4,86,3,64];

sort($biggestNumber);

echo 'The biggest number is: '.$biggestNumber[4];


echo '<h3>Ex.7</h3><br>';

//Ex.7========================================

$sort1 = 500;
$sort2 = 1000;
$sort3 = 2000;

if ($sort1 > $sort2 && $sort1 > $sort3){
    if($sort2 > $sort3){
        echo $sort1.' > '.$sort2.' > '.$sort3;    
    }
        else{
          echo $sort1.' > '.$sort3.' > '.$sort2;   
        }
    }

if($sort2 > $sort1 && $sort2 > $sort3){
    if($sort1 > $sort3){
       echo $sort2.' > '.$sort1.' > '.$sort3; 
    }
    else{
       echo $sort2.' > '.$sort3.' > '.$sort1; 
    }
} 

if ($sort3 > $sort1 && $sort3 > $sort2 ){
    if($sort1 > $sort2){
       echo $sort3.' > '.$sort1.' > '.$sort2; 
    }
    else{
        echo $sort3.' > '.$sort2.' > '.$sort1;
    }
}
    


    
   
echo '<h3>Ex.8</h3><br>';

//Ex.8========================================

        
$number = 'test is string';

if(is_string($number)==true){
    echo 'not a digit';
}

else{
    
    switch ($number){
    case 0: echo 'zero';
        break;
    case 1: echo 'one';
        break;
    case 2: echo 'two';
        break;
    case 3: echo 'three';
        break;
    case 4: echo 'four';
        break;
    case 5: echo 'five';
        break;
    case 6: echo 'six';
        break;
    case 7: echo 'seven';
        break;
    case 8: echo 'eight';
        break;
    case 9: echo 'nine';
        break;
    default: echo 'not a digit';
    }
    }


echo '<h3>Ex.9</h3><br>';

//Ex.9========================================

$number1=200;

if($number1<=20){
    switch ($number1){
     case 0: echo 'zero';
        break;
    case 1: echo 'one';
        break;
    case 2: echo 'two';
        break;
    case 3: echo 'three';
        break;
    case 4: echo 'four';
        break;
    case 5: echo 'five';
        break;
    case 6: echo 'six';
        break;
    case 7: echo 'seven';
        break;
    case 8: echo 'eight';
        break;
    case 9: echo 'nine';
        break;
    case 10: echo 'ten';
        break;
    case 11: echo 'eleven';
        break;
    case 12: echo 'twelve';
        break;
    case 13: echo 'thurteen';
        break;
    case 14: echo 'fourteen';
        break;
    case 15: echo 'fifteen';
        break;
    case 16: echo '$sixteen';
        break;
    case 17: echo 'seventeen';
        break;
    case 18: echo 'eighteen';
        break;
    case 19: echo 'nineteen';
        break;
    case 20: echo 'twenty';
        break;
    default: echo 'not a digit';
    
    } 
}
else{
    if($number1<=99){
        $tens = str_split($number1);
        
        switch ($tens[0]){
  
    case 2: echo 'twenty ';
        break;
    case 3: echo 'thirty ';
        break;
    case 4: echo 'forty ';
        break;
    case 5: echo 'fifty ';
        break;
    case 6: echo 'sixty ';
        break;
    case 7: echo 'seventy ';
        break;
    case 8: echo 'eighty ';
        break;
    case 9: echo 'ninety ';
        break;
    default: echo 'not a digit';
    
    }
    
    switch ($tens[1]){
    case 0: echo '';
        break;
    case 1: echo 'one';
        break;
    case 2: echo 'two';
        break;
    case 3: echo 'three';
        break;
    case 4: echo 'four';
        break;
    case 5: echo 'five';
        break;
    case 6: echo 'six';
        break;
    case 7: echo 'seven';
        break;
    case 8: echo 'eight';
        break;
    case 9: echo 'nine';
        break;
    default: echo 'not a digit';
    
    }
        
    }
    else{
        $hundreds = str_split($number1);
        
        switch ($hundreds[0]){
    case 1: if($hundreds[1]==0 && ($hundreds[2]==0)){
            echo 'one hundred';
            }
            else{
            echo 'one hundred and ';   
            }
        break;
        case 2: if($hundreds[1]==0 && ($hundreds[2]==0)){
            echo 'two hundred';
            }
            else{
            echo 'two hundred and ';   
            }
        break;
            case 3: if($hundreds[1]==0 && ($hundreds[2]==0)){
            echo 'three hundred';
            }
            else{
            echo 'three hundred and ';   
            }
        break;
            case 4: if($hundreds[1]==0 && ($hundreds[2]==0)){
            echo 'four hundred';
            }
            else{
            echo 'four hundred and ';   
            }
        break;
            case 5: if($hundreds[1]==0 && ($hundreds[2]==0)){
            echo 'five hundred';
            }
            else{
            echo 'five hundred and ';   
            }
        break;
            case 6: if($hundreds[1]==0 && ($hundreds[2]==0)){
            echo 'six hundred';
            }
            else{
            echo 'six hundred and ';   
            }
        break;
            case 7: if($hundreds[1]==0 && ($hundreds[2]==0)){
            echo 'seven hundred';
            }
            else{
            echo 'seven hundred and ';   
            }
        break;
            case 8: if($hundreds[1]==0 && ($hundreds[2]==0)){
            echo 'eight hundred';
            }
            else{
            echo 'eight hundred and ';   
            }
        break;
            case 9: if($hundreds[1]==0 && ($hundreds[2]==0)){
            echo 'nine hundred';
            }
            else{
            echo 'nine hundred and ';   
            }
        break;
    default: echo 'not a digit ';
    
    }
    
     switch ($hundreds[1]){
    case 0: echo '';
        break;
    case 1: 
        
        
        switch ($hundreds[2]){
        
        
         case 0: echo 'ten';
        break;
    case 1: echo 'eleven';
        exit;
    case 2: echo 'twelve';
        exit;
    case 3: echo 'thurteen';
        exit;
    case 4: echo 'fourteen';
        exit;
    case 5: echo 'fifteen';
        exit;
    case 6: echo '$sixteen';
        exit;
    case 7: echo 'sevenreen';
        exit;
    case 8: echo 'eighteen';
        exit;
    case 9: echo 'nineteen';
        exit;
    
    default: echo 'not a digit';
        
        
        
        }
        
        
        
        
        break;
    case 2: echo 'twenty ';
        break;
    case 3: echo 'thurty ';
        break;
    case 4: echo 'fourty ';
        break;
    case 5: echo 'fifty ';
        break;
    case 6: echo 'sixty ';
        break;
    case 7: echo 'seventy ';
        break;
    case 8: echo 'eighty ';
        break;
    case 9: echo 'ninety ';
        break;
    default: echo 'not a digit';
    
    }
    
    switch ($hundreds[2]){
    
    case 0: echo '';
        break;    
     case 1: echo 'one';
        break;
    case 2: echo 'two';
        break;
    case 3: echo 'three';
        break;
    case 4: echo 'four';
        break;
    case 5: echo 'five';
        break;
    case 6: echo 'six';
        break;
    case 7: echo 'seven';
        break;
    case 8: echo 'eight';
        break;
    case 9: echo 'nine';
        break;
    default: echo 'not a digit';
    
    }
        
    
    }
    
}


