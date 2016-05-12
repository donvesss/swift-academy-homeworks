<?php

       require_once 'validate_true.php';
        
        if(!$_POST){
            header('Location:user_pic.php');
            exit;
        }
        
        if(count($_FILES)>0){
            
            $fileDir = $_FILES['user_pic']['tmp_name'];
            $fileName = $_FILES['user_pic']['name'];
            $userDir = 'img/'.$_SESSION['id'];
            
            
            if(!is_dir($userDir)){
                mkdir($userDir);
             
            }
            
            
            $move = move_uploaded_file($fileDir, $userDir.'/'.$fileName);
            
            if($move == TRUE){
                
          
        require_once 'db.php';
        
        
        $userId = $_SESSION['id'];
        
        $sqlChek = 'SELECT path FROM pictures WHERE user_id = "'.$userId.'" AND pictures.info="profile_pic" ';
        $resChec=  mysqli_query($link, $sqlChek);
        $path = mysqli_fetch_assoc($resChec);
        
        if($path['path'] == 'img/avatar.jpg'){
            
            $sql = 'UPDATE pictures SET path = "img/'.$userId.'/'.$fileName.'" WHERE user_id = "'.$userId.'" ';
            $result = mysqli_query($link, $sql);
        }
        else{
            
            $sql = 'INSERT INTO pictures (user_id, path) VALUES ("'.$userId.'", "img/'.$userId.'/'.$fileName.'") ';
                
        
            $result = mysqli_query($link, $sql);
        }
        
        
        if ($result == false) {
		require_once "src/header.php";
		require_once "src/mainmenu.php";
		echo '<p>Error: cannot execute query</p>';
		echo '<p><a href="user_pic.php">Try again</a></p>';
		require_once "src/footer.php";
		exit;
	}
        
        else {  
		require_once "src/header.php";
		require_once "src/mainmenuForLoget.php";
		echo '<p>Снимката е добавена успешно! ';
		require_once "src/footer.php";
		exit;
	}
        }
        else{
                require_once "src/header.php";
		require_once "src/mainmenu.php";
		echo '<p>Не сте избрали снимка</p>';
		echo '<p><a href="user_pic.php">Try again</a></p>';
		require_once "src/footer.php";
		exit;
        }
        
        }
        else{
            header('Location:user_pic.php');
            exit;
        }