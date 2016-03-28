<?php

//EX1==========================================
        
    echo '<h3>EX.1</h3>';
    
$colors = ['white', 'green', 'blue'];

echo $colors[1] . '<br/>';
echo $colors[2] . '<br/>';
echo $colors[0] . '<br/>';
    
       
//EX2==========================================
        
    echo '<h3>EX.2</h3>';

function remove($array, $key){
    echo 'Array before removing element: <br/>';
    print_r($array);
    unset($array[$key]);
    echo '<br/> Array after removing element with key: "'.$key.'":<br/>';
    print_r($array);
}    
    
$x = [1,2,3,4,5,6,7,8,9,10];

$i = 7;

remove($x,$i);
    
//EX3==========================================
        
    echo '<h3>EX.3</h3>'; 
    
function add_element ($index, $element){
    $arr = [1,2,4,5,6,7,8,9,0,10];
    if(count($arr)>$index){
        $arr[$index] = $element;
    }
    else{
        $arr[count($arr)+1] = $element;
    }
    print_r($arr);
}  

$in=50;
$el=19;

add_element($in, $el);


//EX4==========================================
        
    echo '<h3>EX.4</h3>';
    
$temperature = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];    

rsort($temperature);
echo 'Highest values: '.$temperature[0].', '.$temperature[1].', '.$temperature[2].', '.$temperature[3].', '.$temperature[4].'<br/>';

sort($temperature);
echo 'Lowest values: '.$temperature[0].', '.$temperature[1].', '.$temperature[2].', '.$temperature[3].', '.$temperature[4].'<br/>';

$average = array_sum($temperature)/2;
echo 'The average values: '.$average;

//EX5==========================================
        
    echo '<h3>EX.5</h3>'; 
    
$range1= 7;
$range2= 18;
$key=0;

$output=[];

while ($range1<=$range2){
    $output[$key]=$range1;
    $range1++;
    $key++;
}

$rand = shuffle($output);

foreach ($output as $value1) {
    echo $value1.' ';
}

//EX6==========================================
        
    echo '<h3>EX.6</h3>';  
    
$capitals = [ "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"]; 

?>

<form method="POST">
Insert country:    <input type="text" name="capital"/>
                   <input type="submit" value="See"/>
</form>

<?php

$capital;
$temp=0;
if($_POST){
    
@$capital= trim($_POST[capital]);
    
foreach ($capitals as $key => $value) {
    if ($capital == $key){
        echo 'The capital of '.$capital.' is: '.$value;
        $temp=1;
        break;
    }    
}
    if($temp != 1){
        echo 'The country is not in DB';
    }
}