<html>
    <head>  <link rel="stylesheet" type="text/css" href="menu.css"></head>
    <body>
        <h1>רישום מלצר חדש</h1>
        
        <form action="new_waiter.php" method="POST">
          <input id="name" type="text" placeholder="Username" name="username">
          <input id="name" type="password" placeholder="Password" name="password">
    <input  class="Password_Recovery_Ok"  type="Submit"  name="Submit" value="אישור" /></br></br>
        </form>
    </body>
</html>

<?php


    

    
    if (isset($_POST['Submit']))//בדיקה אם מה שנבחר נמצא במערך הקינוחים
        { 
        
        $con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);


    
    $named=$_POST["username"];
    $price=$_POST["password"];
    
    
    
            mysql_query("INSERT INTO `user`.`users` (`username`, `last_name`, `password`, `mail`) VALUES ('$named', '', '$price', '');");//מכניס לטבלת הזמנות מה שנבחר 
            
            
        } 
    
?>

