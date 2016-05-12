<?php   
        
	require_once "validate.php";	
	
        
        if (!$_POST){
            header('location:login.php');
            exit;
        }
        else {
            
        require_once 'db.php';        
	$email = ($_POST['email']);
	$password = ($_POST['password']);
        
	$sql = 'SELECT * FROM users WHERE email="'.$email.'" AND password="'.md5($password).'" ';
	$result = mysqli_query($link, $sql);
	
	if ($result == false) {
		echo '<a href="login.php">Error: cannot execute query</a>';
		exit;
	}
	
	$num_rows = mysqli_num_rows($result);

	if ($num_rows == 1) {
		$_SESSION['isLog'] = true;
		
                $sqlForName = 'SELECT id,name FROM users WHERE email = "'.$email.'"';
                $resultForNameAndId = mysqli_query($link, $sqlForName);
                $userNameAndId = mysqli_fetch_assoc($resultForNameAndId);
                
                $_SESSION['username'] = $userNameAndId['name'];
                $_SESSION['id'] = $userNameAndId['id'];
                
		header('Location: private.php');
		close($link);
		die();
	}
	
	
	
                require_once 'src/header.php';
                require_once 'src/mainmenu.php';
                echo '<p>Няма регистриран потеребител с такъв Email и/или грешна парола!</p>';
		echo '<p>Опитай пак <a href="login.php">Log in</a></p>';
                echo '<p>Или се регистрирай от <a href="register.php"> тук </a></p>';
		require_once "src/footer.php";
		exit;

        }