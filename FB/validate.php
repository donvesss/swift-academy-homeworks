<?php
        
session_start();
        
if(array_key_exists('isLog', $_SESSION)){
            
    if ($_SESSION['isLog'] === TRUE){
        header('location:private.php');
        exit();
    }
}