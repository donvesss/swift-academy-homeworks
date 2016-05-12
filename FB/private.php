<?php

        require_once 'validate_true.php';
	require_once "src/header.php";
	require_once "src/mainmenuForLoget.php";
        require_once 'db.php';
        require_once 'profile_pic.php';
       
        
        $sql = 'SELECT name, id_user, date_of_creation, header, message '
               .'FROM messages JOIN users ON users.id  = messages.id_user ORDER BY date_of_creation DESC';
        
        
        $result = mysqli_query($link, $sql);
  
        
        while ($row = mysqli_fetch_assoc($result))
        {
            $autor = $row['id_user'];
            $sql1 = 'SELECT path FROM pictures WHERE user_id = "'.$autor.'" AND info = "profile_pic"';
            $res1 = mysqli_query($link, $sql1);
            
            $row1 = mysqli_fetch_assoc($res1);
            

            echo
                
            '<div class="post">
                <div class="head">
                
                    <div class="img"><a href="visit_profile.php?id='.$autor.'"><img style="width:70px; height:70px;" src="'.$row1['path'].'"/></a></div>
                    <div calass="name_date">
                        <a style=" text-decoration: none;"href="visit_profile.php?id='.$autor.'"><p style="color:#0e385f;">'.$row['name'].'</p></a>
                        <p style="color:gray;">'.$row['date_of_creation'].'</p>
                    </div>
    
                </div>
                
                <h4>'.$row['header'].'</h4>

                <p>'.$row['message'].'</p>
            
            </div>'; 
        }
        
	
	require_once "src/footer.php";
        