<?php
	require_once 'validate_true.php';
        
	if(!$_POST){
            header('Location:search.php');
            exit();
        }
	
	require_once "src/header.php";
	require_once "src/mainmenuForLoget.php";
	require_once 'db.php';
	
	echo '<fieldset class="pics"><legend>User Information</legend>';

	$name = trim($_POST['name']);	
	$sql = 'SELECT users.id, name, path FROM users LEFT JOIN pictures ON users.id = pictures.user_id WHERE name = "'.$name.'" AND pictures.info = "profile_pic"';
	$result = mysqli_query($link, $sql);
	
	if ($result == false) {
		echo "<p>Error: cannot execute query</p>";
	}
	else {
		$num_rows = mysqli_num_rows($result);

		if ($num_rows >= 1) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<div>";
                                echo '<div><a href="visit_profile.php?id='.$row['id'].'"><img style="width:200px; "src="'.$row['path'].'"/></a></div>';
				echo '<div><a href="visit_profile.php?id='.$row['id'].'">'.$row["name"].'</a></div>';
				echo "</div>";
			}
		}
		else {
			echo "<p>Няма регистриран потребител с такова име</p>";
		}
	}
	
	
	echo "</fieldset>";
	
	require_once "src/footer.php";
