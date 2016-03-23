
        <?php
        
        //EX1==========================================
        
        echo '<h3>EX.1</h3>';
        
        function hello_name($name){
            echo 'Hello, '.$name.'!';
        }
        
        $userName = 'Veselin';
        
        hello_name($userName);
        
        //EX2==========================================
        
        
        echo '<h3>EX.2</h3>';
        
        
        function bigger_number($numberOne, $numberTwo){
            
            if($numberOne > $numberTwo){
                echo 'A large number is: ' .$numberOne;
            }
            else{
                echo 'A large number is: ' . $numberTwo;
            }
            }
            
        $num1 = 25599999;
        $num2 = 50000;
        
        bigger_number($num1, $num2);    
        
        //EX3==========================================
        
        echo '<h3>EX.3</h3>';
        
        function factorial($inputNumber){
            $factorial = 1;
            for($i = 1; $i <=$inputNumber; $i++){
                $factorial = $i*$factorial;
                
                
            }
            echo 'Factorial from '.$inputNumber.' is: '.$factorial;
        }
        
        $fac = 6;
        factorial($fac);
        
        //EX4==========================================
        
        echo '<h3>EX.4</h3>';
        
        function reverce ($number){
            
            echo 'The reverce number is: ';
            
            for($number; $number > 1;){
                $temp = $number%10;
                $number = (int)$number/10;
                echo $temp;
            }
        }
        
        $test = 123456789;
        
        reverce($test);
        
        //EX5==========================================
        
        echo '<h3>EX.5</h3>';
        
        function average($inputNumberOne, $inputNumberTwo){
            $average = ($inputNumberOne + $inputNumberTwo)/2;
            echo 'The average number is: '.$average;
        }
        $numberOne = 5;
        $numberTwo = 10;
        average($numberOne,$numberTwo);
        
