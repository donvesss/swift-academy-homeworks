<?php 
require_once 'profile_pic.php';
?>
<nav>
<ul id="main_menu">
    <li id="logo"><a href="index.php"><img src="img/logo.jpg" alt=""/></a></li>
    <li id="pic"><a href ="user.php"><img src="<?php echo $pic['path']; ?>" alt="" /><?php echo $_SESSION['username'];?></a></li>
    <li style="margin-left: 130px; margin-top: 18px;"><a href="search.php" title="Users list">Search people's</a></li>
    <li style="margin-top: 18px;"><a href="message.php">Add a massage</a></li>
    <li style="margin-top: 18px;"><a href="user.php">Your account</a></li>
    <li style="margin-top: 18px;"><a href="user_pic.php">Add new picture</a></li>
    <li style="margin-left: 300px; margin-top: 18px;"><a href="exit.php">Log out</a></li>
</ul>
</nav>




