<?php

        require_once 'validate_true.php';
	require_once "src/header.php";
	require_once "src/mainmenuForLoget.php";
        require_once 'db.php';
        require_once 'profile_pic.php';
   
        echo '<fieldset style="height:200px;"><legend>Information</legend>';
        
        $sql = ('SELECT * FROM users  WHERE id ="'.$_SESSION['id'].'"');
        $result =  mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>";
		echo "<b>Name:</b> " . $row["name"] . "<br />";
		echo "<b>Date of birth:</b> " . $row["date_of_birth"] . "<br />";
                echo "<b>Place of birth:</b> " . $row["place_of_birth"] . "<br />";
                echo "<b>Nationality:</b> " . $row["nationality"] . "<br />";
                echo "<b>Date of registration:</b> " . $row["date_of_reg"] . "<br />";
                echo "<b>Information:</b> " . $row["info"];
		echo "</p>";				
    
        }
        echo '<a href="user_edit.php" class="but">Edit Your Information</a>';
        echo "</fieldset>";
        
        echo '<fieldset class="pics"><legend>Pictures</legend>';
   
                
        $sql1 = ('SELECT path,info, id FROM pictures WHERE user_id ="'.$_SESSION['id'].'" AND path <>"img/avatar.jpg"');
        $result1 =  mysqli_query($link, $sql1);
        while ($row1 = mysqli_fetch_assoc($result1)) {
                echo '<div class="picc">';
		echo '<img style="width: 200px" src="'.$row1['path'].'"/>';
                if($row1['info'] != 'profile_pic'){
                   echo '<p><a href="profile_pic_action.php?id_pic='.$row1['id'].'" class="but">Направи профилна</a></p>'; 
                }
                echo '<p><a href="delete_pic_action.php?id_pic='.$row1['id'].'" class="but">Изтрий</a></p>';
                echo '</div>';
        }
        

        
         
        echo "</fieldset>";
   
        require_once "src/footer.php";