<?php
  require_once 'validate_true.php';
  
    if(!$_POST){
            header('Location:user_edit.php');
            exit;
        }
        
        require_once 'db.php';
        
        
            if((mb_strlen($_POST['edit_name']))>0){
                $name = trim($_POST['edit_name']);
                
                if((mb_strlen($name)) < 5){
                $error = true;
                require_once "src/header.php";
		require_once "src/mainmenuForLoget.php";
		echo '<p>Името трябва да съдържа поне 5 символа</a>';
		echo '<p><a href="user_edit.php">Try again</p>';
		require_once "src/footer.php";
		exit;   
                }
                
                $sqlName = ('UPDATE users SET name = "'.$name.'"  WHERE id = "'.$_SESSION['id'].'"');
                $res = mysqli_query($link, $sqlName);
                
            }
            else{
                $res = 0;
            }
            
            if(mb_strlen($_POST['old_pass'])>0 && mb_strlen($_POST['password1'])> 0 && mb_strlen($_POST['password2'])>0 ){
                $oldPass = md5(trim($_POST['old_pass']));
                $pass1 = md5(trim($_POST['password1']));
                $pass2 = md5(trim($_POST['password2']));
                
                if((mb_strlen($_POST['password1'])) < 5){
                $error = true;
                require_once "src/header.php";
		require_once "src/mainmenuForLoget.php";
		echo '<p>Новата паролата е прекалено къса</a>';
		echo '<p><a href="user_edit.php">Try again</p>';
		require_once "src/footer.php";
		exit;
                }
                
                if ($pass1 != $pass2) {
                $error = true;
		require_once "src/header.php";
		require_once "src/mainmenu.php"; 
		echo '<p>Паролата не съвпада</a>';
		echo '<p><a href="user_edit.php">Try again</p>';
		require_once "src/footer.php";
		exit;
                
                }
                
                $sqlOldPass = ('SELECT password FROM users WHERE id="'.$_SESSION['id'].'"');
                $res = mysqli_query($link, $sqlOldPass);
                $row = mysqli_fetch_assoc($res);
                
                
                    if($row['password'] == $oldPass){
                       $sqlPass = ('UPDATE users SET password = "'.$pass1.'"  WHERE id = "'.$_SESSION['id'].'"');
                       $res1 = mysqli_query($link, $sqlPass);
                    }
                    else {
                        require_once "src/header.php";
                        require_once "src/mainmenuForLoget.php";
                        echo '<p>Въвели сте грешна парола</a>';
                        echo '<p><a href="user_edit.php">Try again</p>';
                        require_once "src/footer.php";
                        exit;
                    }
      
                }
                    
                else{
                    $res1 = 0;
                } 
                
                     
                if(mb_strlen($_POST['date_of_birth'])>0){
                    $date_of_birth = $_POST['date_of_birth'];
                    
                    $sqlDate = ('UPDATE users SET date_of_birth = "'.$date_of_birth.'"  WHERE id = "'.$_SESSION['id'].'"');
                    $res2 = mysqli_query($link, $sqlDate);
                }
                 else{
                    $res2 =0 ;
                }
                
                if(mb_strlen($_POST['place_of_birth'])>0){
                    $place_of_birth = trim($_POST['place_of_birth']);
                    
                    $sqlPlace = ('UPDATE users SET place_of_birth = "'.$place_of_birth.'"  WHERE id = "'.$_SESSION['id'].'"');
                    $res3 = mysqli_query($link, $sqlPlace);
                }
                 else{
                    $res3 = 0;
                    }
                
                if(mb_strlen($_POST['nationality'])>0){
                    $nationality = trim($_POST['nationality']);
                    
                    $sqlNationality = ('UPDATE users SET nationality = "'.$nationality.'"  WHERE id = "'.$_SESSION['id'].'"');
                    $res4 = mysqli_query($link, $sqlNationality);
                }
                 else{
                    $res4 = 0;
                }   
            
                if(mb_strlen($_POST['info'])>0){
                    $info = trim($_POST['info']);
                    
                    $info = ('UPDATE users SET info = "'.$info.'"  WHERE id = "'.$_SESSION['id'].'"');
                    $res5 = mysqli_query($link, $info);
                }
                 else{
                    $res5 = 0;
                }
                
                if(($res === 0) && ($res1 === 0) && ($res2 === 0) && ($res3 === 0) && ($res4 === 0) && ($res5 === 0)){
                    require_once "src/header.php";
                    require_once "src/mainmenuForLoget.php"; 
                    echo '<p>Моля въведете данни</a>';
                    echo '<p><a href="user_edit.php">Try again</p>';
                    require_once "src/footer.php";
                    exit;
                }
              
                   
                if($res ==true || $res1 == true){
                    require_once "src/header.php";
                    require_once "src/mainmenuForLoget.php";
                    echo '<p>Данните са променени, моля влезте отново в системата</a>';
                    require_once "src/footer.php";
                    session_destroy();
                    exit;
                }
                
                if($res2 ==true || $res3 == true || $res4 ==true || $res5 == true ){
                    require_once "src/header.php";
                    require_once "src/mainmenuForLoget.php";
                    echo '<p>Данните са променени</a>';
                    require_once "src/footer.php";
                    exit;
                }
                
