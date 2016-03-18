<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Сравнение</h1>
        
        <form method="POST" name="numbers" >
            
Първо число:<input type="text" name="a"/> <br>
Второ число:<input type="text" name="b"/> <br>

            <input type="submit" name="calculate" value="Сравни" />
        </form>
        
        
        
        
    </body>
</html>

<?php

if($_POST){
    $firstNumber=  trim($_POST['a']);
    $secondNumber=  trim($_POST['b']);
    
    if($firstNumber===$secondNumber){
        echo 'Двете числа са равни';
    }
    else{
        if($firstNumber>$secondNumber){
            echo '<p>Числото '.$firstNumber.' e по-голямо от числото '.$secondNumber.'</p>';
        }
            else {
                echo '<p>Числото '.$secondNumber.' e по-голямо от числото '.$firstNumber.'</p>';
            }
                
            
    }
}