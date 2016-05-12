<?php

session_start();
   
    if ($_SESSION['isLog'] !== TRUE){
        header('location:login.php');
        exit();
    }    