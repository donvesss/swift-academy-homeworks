<?php

require_once 'DB.php';

for ($p=1; $p<=7; $p++){
    
    $userId = rand(1, 10);
    $post = 'POST number '.$p.' The PHP development team announces the immediate availability of PHP
        7.0.5. This is a security release. Several security bugs were fixed in this release. 
        All PHP 7.0 users are encouraged to upgrade to this version.
        For source downloads of PHP 7.0.5 please visit our downloads page, 
        Windows source and binaries can be found on windows.php.net/download/. 
        The list of changes is recorded in the ChangeLog.'.$userId;
    
    $sql = 'INSERT INTO posts (user_id, post) VALUES ("'.$userId.'","'.$post.'")';
    $result = mysqli_query($conn, $sql); 
    
    if($result != TRUE){
        echo 'Заявката не е изпълнена';
        echo mysqli_error($conn);
    }

    else{
        echo 'Добавен пост';
        
    }
    
    for($c=1; $c<=rand(1, 5); $c++){
        
        $postId = $p;
        $comment = 'Coment number '.$c.' for post '.$p;
        
        $sql1 = 'INSERT INTO comments (post_id, comment) VALUES ("'.$postId.'","'.$comment.'")';
        $result1 = mysqli_query($conn, $sql1);
      
    }
        
}