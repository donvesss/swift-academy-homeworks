<?php
require_once 'validate_true.php';
if(!$_GET){
    
    header('Location:user.php');
    exit();
    
}
    
    $idPic = $_GET['id_pic'];
    
    require_once 'db.php';
    
    $sqlChek = 'SELECT * FROM pictures WHERE user_id="'.$_SESSION['id'].'"';
    $resChec = mysqli_query($link, $sqlChek);
    $count = mysqli_num_rows($resChec);
    $row = mysqli_fetch_assoc($resChec);
    
    if($count==1){
        $sql = 'UPDATE pictures SET path = "img/avatar.jpg", info = "profile_pic" WHERE user_id="'.$_SESSION['id'].'"';
        $res = mysqli_query($link, $sql);
    }
    else{
        if($row['info'] == 'profile_pic'){
            $sql = 'UPDATE pictures SET path = "img/avatar.jpg", info = "profile_pic" WHERE id="'.$idPic.'" AND user_id="'.$_SESSION['id'].'"';
            $res = mysqli_query($link, $sql);
        }
        else{
        $sql = 'DELETE FROM pictures WHERE id="'.$idPic.'" AND user_id="'.$_SESSION['id'].'"';
        $res = mysqli_query($link, $sql);
        }
    }
   
    
    if($res == FALSE){
        require_once "src/header.php";
        require_once "src/mainmenuForLoget.php";
        echo 'Заявката не може да бъде изпълнен, моля опитайте малко по-късно';
        require_once "src/footer.php";
        exit;
    }
    require_once "src/header.php";
    require_once "src/mainmenuForLoget.php"; 
    echo '<p>Снимката е изтрита</a>';
    require_once "src/footer.php";
    exit;                