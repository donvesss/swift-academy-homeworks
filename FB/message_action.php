<?php

       require_once 'validate_true.php';
        
        if(!$_POST){
            header('location:message.php');
            exit;
        }
       
        $header = trim($_POST['header']);
        $message = trim($_POST['message']);
        $idUser = $_SESSION['id'];
        
        if(mb_strlen($message) < 1){
                require_once "src/header.php";
		require_once "src/mainmenu.php";
		echo '<p>Моля въведете съобщение</p>';
		echo '<p><a href="message.php">Try again</a></p>';
		require_once "src/footer.php";
		exit;
        }
        
        require_once 'db.php';
        
        $sql = 'INSERT INTO messages (id_user, header, message) VALUES ("'.$idUser.'","'.$header.'","'.$message.'")';
        $result = mysqli_query($link, $sql);
        
        if ($result == false) {
		require_once "src/header.php";
		require_once "src/mainmenuForLoget.php";
		echo '<p>Error: cannot execute query</p>';
		echo '<p><a href="message.php">Try again</a></p>';
		require_once "src/footer.php";
		exit;
	}
	else {  
		require_once "src/header.php";
		require_once "src/mainmenuForLoget.php";
		echo '<p>Съобщението е добавено успешно! '
                .'Mоже да го прочетете на стената със <a href="private.php"> съобщения </a></p>';
		require_once "src/footer.php";
		exit;
	}
