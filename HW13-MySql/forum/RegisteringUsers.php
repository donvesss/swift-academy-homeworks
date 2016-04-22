<?php

require_once 'DB.php';

for($i=1; $i<=10; $i++){
    
    $userName = 'user'.$i;
    $userPass = 'passForUser'.$i;
    $userEmail = 'emailForUser'.$i;
    $firstName = 'firstName'.$i;
    $lastName = 'lastName'.$i;
    
    $sql = 'INSERT INTO users (username, password, email, first_name, last_name) '
        . 'VALUES ("'.$userName.'","'.$userPass.'","'.$userEmail.'","'.$firstName.'","'.$lastName.'")';

    $result = mysqli_query($conn, $sql);

    if($result != TRUE){
        echo 'Заявката не е изпълнена';
        echo mysqli_error($conn);
    }

    else{
        echo 'Регистраиятае успешна';
        
    }
    }