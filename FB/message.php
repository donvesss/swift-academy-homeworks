<?php

        require_once 'validate_true.php';
        require_once 'src/header.php';
        require_once 'src/mainmenuForLoget.php';
        require_once 'profile_pic.php';
        
?>       
        <form method="post" action="message_action.php" id="msg">
        <fieldset class="pics">
	<legend>Add message</legend>
        <p><label for="header"></label> <input type="text" name="header" id="header" placeholder="Header" /></p>
        <p><textarea form="msg" name="message" placeholder="Type your message hire"></textarea></p>
        <p><input class="but" type="submit" value="Add" /></p>
	</fieldset>
	</form>
        
<?php        
        
        require_once 'src/footer.php';