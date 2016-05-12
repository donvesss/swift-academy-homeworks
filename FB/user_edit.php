<?php


        require_once 'validate_true.php';
	require_once "src/header.php";
	require_once "src/mainmenuForLoget.php";
        
        ?>
        
        <form method="post" action="user_edit_action.php">
            <fieldset class="pics">
	<legend>users</legend>
	<p>
            <label for="edit_name"></label> <input type="text" name="edit_name" id="edit_name" placeholder="Edit Full name" /> 
	<br>
            <label for="old_pass"></label> <input type="password" name="old_pass" id="old_pass" placeholder="Old Password" /> 
	<br>
            <label for="password1"></label> <input type="password" name="password1" id="password1" placeholder="New Password" />
	<br>
            <label for="password2"></label> <input type="password" name="password2" id="password2" placeholder="Confirm new password"/>
	<br>
            <label for="date_of_birth"></label> <input type="date" name="date_of_birth" id="date_of_birth" />
	<br>
            <label for="place_of_birth"></label> <input type="text" name="place_of_birth" id="place_of_birth" placeholder="Place of birth"/>
	<br>
            <label for="nationality"></label> <input type="text" name="nationality" id="nationality" placeholder="Nationality"/>
	<br>
            <label for="info"></label> <textarea name="info" id="info" rows="5" cols="50" placeholder="Information"></textarea>
	</p>
	
        <p><input class="but" value="Save Changes" type="submit" /></p>
	</fieldset>
	</form>
        
        
        <?php
        
        
        
        require_once "src/footer.php";