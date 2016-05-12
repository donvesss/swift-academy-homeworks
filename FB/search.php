<?php
	require_once 'validate_true.php';
	require_once "src/header.php";
        require_once 'src/mainmenuForLoget.php';
        require_once 'profile_pic.php';
      
?>
	<form method="post" action="search_full_result.php">
	<fieldset>
	<legend>Search</legend>
	<p><label for="name">Name:</label> <input type="text" name="name" id="name" /></p>
        <p><input class="but" type="submit" value="Search" /></p>
	</fieldset>
	</form>
<?php	
	require_once "src/footer.php";
