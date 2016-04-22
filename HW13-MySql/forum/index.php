<?php

require_once 'DB.php';

$sql = 'SELECT first_name, last_name, posts.id, post, created_at '
        . 'FROM users INNER JOIN posts ON users.id = posts.user_id';

$result = mysqli_query($conn, $sql);

if($result != TRUE){
        echo 'Заявката не е изпълнена';
        echo mysqli_error($conn);
        exit();
    }

if(mysqli_num_rows($result)==0){
    echo 'Няма добавени постове';
    exit();
}   

while ($row = mysqli_fetch_assoc($result)){
    
    echo '<p><b> Публикация: </b> '.$row['post'].'</p>';
    echo '<p><b> Автор име: </b>'.$row['first_name'].'</p>';
    echo '<p><b> Автор Фамилия: </b>'.$row['last_name'].'</p>';
    echo '<p><b> Дата: </b>'.$row['created_at'].'</p>';
    echo '--------------------------Comments-----------------------<br>';
   
    
    $sql1 = 'SELECT comment FROM comments WHERE post_id ='.$row['id'];

    $result1 = mysqli_query($conn, $sql1);
    
    while ($row1 = mysqli_fetch_assoc($result1)){
       
        echo '<p>'.$row1['comment'].'</p>';
          
    }
    echo '=================================================================<br>';
    
}






    
    



