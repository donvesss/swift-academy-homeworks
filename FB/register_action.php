<?php   
        require_once "validate.php";
	require_once 'db.php';
        
        if($_POST){
            
        
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$password1 = md5(trim($_POST['password1']));
	$password2 = md5(trim($_POST['password2']));
	$date_of_birth = trim($_POST['date_of_birth']);
        $place_of_birth = trim($_POST['place_of_birth']);
	$info = trim($_POST['info']);
        $nationality = trim($_POST['nationality']);
        
        if((mb_strlen($name)) < 5){
                $error = true;
                require_once "src/header.php";
		require_once "src/mainmenu.php";
		echo '<p>Името трябва да съдържа поне 5 символа</a>';
		echo '<p><a href="register.php">Try again</p>';
		require_once "src/footer.php";
		exit;   
        }
        
        else if((mb_strlen($email)) < 5){
                $error = true;
                require_once "src/header.php";
		require_once "src/mainmenu.php";
		echo '<p>Невалиден E-mail</a>';
		echo '<p><a href="register.php">Try again</p>';
		require_once "src/footer.php";
		exit;
        }
        
        else if((mb_strlen($_POST['password1'])) < 5){
                $error = true;
                require_once "src/header.php";
		require_once "src/mainmenu.php";
		echo '<p>Паролата е прекалено къса</a>';
		echo '<p><a href="register.php">Try again</p>';
		require_once "src/footer.php";
		exit;
        }
        
	else if ($password1 != $password2) {
                $error = true;
		require_once "src/header.php";
		require_once "src/mainmenu.php";
                
		echo '<p>Паролата не съвпада</a>';
		echo '<p><a href="register.php">Try again</p>';
		require_once "src/footer.php";
		exit;
	}
	
        else{
            
        $sql = 'SELECT * FROM users WHERE email = "' .$email. '" ';
        $result = mysqli_query($link, $sql);
        if(mysqli_num_rows($result)>0){
                require_once "src/header.php";
		require_once "src/mainmenu.php";
		echo '<p>Имa регистриран потребител с такъв E-mail</a>';
		echo '<p><a href="register.php">Try again</p>';
		require_once "src/footer.php";
		exit;
        }
        
        
	$sql = 'INSERT INTO users (name, info, date_of_birth, email, password) VALUES ("' .$name. '", "' .$info. '", "' .$date_of_birth. '", "'. $email. '", "'.$password1.'")';
	$result = mysqli_query($link, $sql);
	
	if ($result == false) {
		require_once "src/header.php";
		require_once "src/mainmenu.php";
		echo '<p>Error: cannot execute query</p>';
		echo '<p><a href="register.php">Try again</a></p>';
		require_once "src/footer.php";
		exit;
	}
	else {  
            
                $sqlId = 'SELECT id FROM users WHERE email = "'.$email.'"';
                $result1 = mysqli_query($link, $sqlId);
                $id = mysqli_fetch_assoc($result1);
                
                $sqlpic = 'INSERT INTO pictures (user_id, info, path) VALUES ("'.$id['id'].'","profile_pic", "img/avatar.jpg")';
                $result2 = mysqli_query($link, $sqlpic);
                
                require_once "src/header.php";
		require_once "src/mainmenu.php";
		echo '<p>Регистрацията премина успешно, можете да влезете от <a href="login.php">тук:</a></p>';
		require_once "src/footer.php";
		exit;
	}

	}
        
        }
        else{
            header('Location: register.php');
            exit;
        }
