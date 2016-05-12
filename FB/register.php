<?php
	
	require_once "validate.php";
	require_once "src/header.php";
	require_once "src/mainmenu.php";
?>
	<form method="post" action="register_action.php">
        <fieldset class="pics">
        <legend>Register</legend>
	<p>
            <label for="name"></label> <input type="text" name="name" id="name" placeholder="Your name" /> 
	<br>
		<label for="email"></label> <input type="email" name="email" id="email" placeholder="Your email" /> 
	<br>
		<label for="password1"></label> <input type="password" name="password1" id="password1" placeholder="Password" />
	<br>
		<label for="password2"></label> <input type="password" name="password2" id="password2" placeholder="Confirm password" />
	<br>
        <label for="date_of_birth"></label> <input type="date" name="date_of_birth" id="date_of_birth"  />
	<br>
        <label for="place_of_birth"></label> <input type="text" name="place_of_birth" id="place_of_birth" placeholder="Place of birth"/>
	<br>
        <label for="nationality"></label> <input type="text" name="nationality" id="nationality" placeholder="Nationality"/>
	<br>
        <label for="info"></label> <textarea name="info" id="info" rows="5" cols="50" placeholder="Type something for you"></textarea>
	</p>
	
        <p><input class="but" value="Register" type="submit" /></p>
	</fieldset>
	</form>
<?php	
	require_once "src/footer.php";
