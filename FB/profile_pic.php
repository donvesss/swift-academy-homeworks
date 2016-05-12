<?php
require_once 'db.php';

$sqlPic = ('SELECT path FROM pictures WHERE user_id ="'.$_SESSION['id'].'" AND info = "profile_pic"');
    $resPic = mysqli_query($link, $sqlPic);
    $pic = mysqli_fetch_assoc($resPic);
