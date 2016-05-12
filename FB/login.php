<?php
	
        require_once "validate.php";
	require_once "src/header.php";
	require_once "src/mainmenu.php";
?>
	<form method="post" action="login_action.php">
	<fieldset>
	<legend>Login</legend>
        <p><label for="email"></label> <input type="text" name="email" id="email" placeholder="Email" /></p>
        <p><label for="password"></label> <input type="password" name="password" id="password" placeholder="Password" /></p>
        <p><input class="but" value="Login" type="submit"/></p>
	</fieldset>
	</form>

<?php 
	require_once "src/footer.php";
