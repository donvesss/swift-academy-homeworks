

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Квадратно уравнение</h1>
        <h3>a*x2 + b*x + c = 0</h3>
        <form method="POST" name="numbers" >
            
Въведете параметър А:<input type="text" name="a"/> <br>
Въведете параметър B:<input type="text" name="b"/> <br>
Въведете параметър C:<input type="text" name="c"/> <br>
            <input type="submit" name="calculate" value="Изчисли" />
        </form>
        
        
        
        
    </body>
</html>


  
<?php

if($_POST){

    
$a = trim($_POST['a']);
$a = (int)$_POST['a'];
$b = trim($_POST['b']);
$b = (int)$_POST['b'];
$c = trim($_POST['c']);
$c = (int)$_POST['c'];

if(($a==0)||($b==0)||($c==0)){
    
    echo 'Въведени са грешни данни' ;   
}
else{
    


$d = ($b*$b) - (4*$a*$c);



if ($d == 0){
    
    $x = -1*$b/2*$a;
    
    echo '<p>Уравнението има един корен = '.$x.'</p>';
}

else{
    if (!($d < 0)){  
        
    $x1 = (-1*$b + sqrt($d))/2*$a;
    $x2 = (-1*$b - sqrt($d))/2*$a;
    
    echo  
          '<h3>'.$a.'x2 +'.$b.'x +'.$c.' = 0</h3>
          <p>Уравнението има два корена:</p>
          <p>Корен 1 = '.$x1. '</p>
          <p>Корен 2 = '.$x2.'</p>' ;
}

else{
    echo 'Няма реални корени';
}
    
}
}
}




