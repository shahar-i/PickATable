<html>
    <head>  <link rel="stylesheet" type="text/css" href="menu.css"></head>
    <body >
        <h1>רישום מלצר חדש</h1>
      
        <form  action="new_waiter.php" method="POST">
          <input id="name" type="text" placeholder="Username" name="username">
          <input id="name" type="password" placeholder="Password" name="password">
          <input  class=""  type="submit"  name="Submit" value="אישור" /></br></br>
       
        </form> 
    </body>
</html>

<?php


    

    
    if (isset($_POST['Submit']))
        { 
       
        $con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);
 
  
    $username1 = $_POST['username']; 
      
    
    $result5 = mysql_query("SELECT * FROM `users`");
    
    $i=1;
     while ($name_db = mysql_fetch_array($result5)) { 
       
     

    $username1 = $_POST['username'];    
    $username2 = $name_db['username'];
    
   
    
    $password = $_POST['password'];  
    
     
    if ($username1 == $username2) {
       echo 'kayam';
       $i=0;
       break;
       
    }
         
     } 
       
     if($i==1)
     {
        echo 'not found,nichnas';
            $_SESSION['username'] = $res['username'];
                 mysql_query("INSERT INTO `user`.`users` (`username`, `last_name`,`password`, `mail`) VALUES ('$username1', '', '$password', '');"); 
     }
        } 
           
?>

