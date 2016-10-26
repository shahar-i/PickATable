<html>
    <head>  <link rel="stylesheet" type="text/css" href="menu.css"></head>
    <body >
        <h1>רישום מלצר חדש</h1>
      
        <form  action="new_waiter.php" method="POST">
          <input id="name" type="text" placeholder="Username" name="username">
          <input id="name" type="password" placeholder="Password" name="password">
    <input  class="Password_Recovery_Ok"  type="Submit"  name="Submit" value="אישור" /></br></br>
       
        </form> 
    </body>
</html>

<?php


    
khk
    
    if (isset($_POST['Submit']))
        { 
        
        $con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);

    $username1 = $_POST['username']; 
    
    
    $result = mysql_query("SELECT * FROM users WHERE username='$username'");
    
     if (mysql_num_rows($result)) {
while ($name_db = mysql_fetch_array($result)){
   
       

    

    $username1 = $_POST['username'];    
    $username2 = $name_db['username'];

    if ($username1 == $username2 ) {
       echo 'not found';
       break;
    }
 else {
            $_SESSION['username'] = $res['username'];
                 mysql_query("INSERT INTO `user`.`users` (`username`, `last_name`,`password`, `mail`) VALUES ('$username1', '', '', '');");//מכניס לטבלת הזמנות מה שנבחר 

    }      
    }    
            
        } 
        }    
?>

