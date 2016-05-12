<?php
require_once 'validate_true.php';
if(!$_GET){
    
    header('Location:user.php');
    exit();
   
    }
    
    $idPic = $_GET['id_pic'];
    
    require_once 'db.php';
    $sql = 'UPDATE pictures SET info="" WHERE user_id="'.$_SESSION['id'].'"';
    $res = mysqli_query($link, $sql);
    
    if($res == FALSE){
        echo 'Заявката не е изпълнена';
    }
    
    $sql1 = 'UPDATE pictures SET info="profile_pic" WHERE id="'.$idPic.'"';
    $res1 = mysqli_query($link, $sql1);
    
    if($res1 == FALSE){
        echo 'Заявката не е изпълнена';
    }
    
    require_once "src/header.php";
    require_once "src/mainmenuForLoget.php"; 
    echo '<p>Променихте успешно профилната си снимка</a>';
    require_once "src/footer.php";
    exit;