<?php

$conn = mysqli_connect('localhost', 'vesko', '123', 'forum');

if($conn != TRUE){
    echo 'No Database';
    exit();
}