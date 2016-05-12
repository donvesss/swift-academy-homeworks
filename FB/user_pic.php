<?php

        require_once 'validate_true.php';
        require_once 'src/header.php';
        require_once 'src/mainmenuForLoget.php';
?>       
        <form method="post" action="user_pic_action.php" id="msg" enctype="multipart/form-data">
	<fieldset>
	<legend>Add user picture</legend>
        <p><label for="user_pic">Pic:</label> <input type="file" name="user_pic" id="user_pic" /></p>
        <p><label for="user"></label> <input type="hidden" value="hidden" name="user" id="user" /></p>
        <p><input class="but" type="submit" value="Add" /></p>
	</fieldset>
	</form>
        
<?php        
        
        require_once 'src/footer.php';