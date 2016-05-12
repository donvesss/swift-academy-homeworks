<?php

        require_once 'validate_true.php';
	require_once "src/header.php";
	require_once "src/mainmenuForLoget.php";
        require_once 'db.php';
        require_once 'profile_pic.php';
     
        echo '<fieldset style="height:200px;"><legend>User Information</legend>';
        
        $sql = ('SELECT * FROM users  WHERE id ="'.$_GET['id'].'"');
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
        
        echo "</fieldset>";
        
        echo '<fieldset class="pics"><legend>User Pictures</legend>';
        
        $sql1 = ('SELECT path, id FROM pictures WHERE user_id ="'.$_GET['id'].'"');
        $result1 =  mysqli_query($link, $sql1);
        while ($row1 = mysqli_fetch_assoc($result1)) {
                echo '<p>';
		echo '<div class="picc"><img style="width: 300px;" src="'.$row1['path'].'"/></div>';
                echo '</p>';
   
        }
        

        
         
        echo "</fieldset>";
   
        require_once "src/footer.php";
