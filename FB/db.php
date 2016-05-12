<?php
	$link = mysqli_connect('localhost', 'vesko', '123', 'facebook');
	
	if (!$link) {
            require_once "src/header.php"; 
            echo '<p>В момента протича техническа поддръжка, моля опитайте малко по-късно</a>';
            require_once "src/footer.php";
            exit;
		
	}
	
	if (!mysqli_select_db($link, 'facebook')) {
            require_once "src/header.php";
            echo '<p>В момента протича техническа поддръжка, моля опитайте малко по-късно</a>';
            require_once "src/footer.php";
            exit;
        }
