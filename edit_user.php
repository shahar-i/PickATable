<html>
    <head>  <link rel="stylesheet" type="text/css" href="menu.css"></head>
    <body align="center">
        <h1>עדכון פרטי מלצר</h1>
  
        <form  action="edit_user.php" method="POST">
           username:
           <input class="floatright" type="text" placeholder="Username" name="username" ><br>
           new username:
           <input  type="text" placeholder="New Username" name="new_username"><br>
           new last name:
           <input  type="text" placeholder="new last name" name="new_lastname"><br>
           new password:
           <input id="name2" type="password" placeholder="Password" name="password"><br>
            new email:
            <input class="floatright" type="email" placeholder="new email" name="email" ><br>
           <br><br>
            <input  class=""  type="submit"  name="Submit" value="אישור" /></br></br>
                   <div class="back">
                    <input class="button-exit"  type="button" onclick="location.href = 'manager.php'" value="חזרה להגדרות מנהל" />
                    
        </form> 
    </body>
</html>



<?php


$con = mysql_connect('localhost', 'root', '');
    mysql_select_db('user', $con);
    $result5 = mysql_query("SELECT * FROM `users`");
    echo  nl2br( "\n");
    echo 'דאר אלקטרוני';
 
 echo '     ';
 echo 'שם משפחה';
 echo '     ';
 echo 'שם פרטי';
    while ($name_db = mysql_fetch_array($result5)) {
echo  nl2br( "\n");
echo $name_db['username'];
echo '     ';
echo $name_db['last_name'];
echo '     ';
echo $name_db['mail'];
echo  nl2br( "\n");

    }



if (isset($_POST['Submit'])) {
    

$flage=0;
$i=0;


$con = mysql_connect('localhost', 'root', '');
    mysql_select_db('user', $con);

 $result5 = mysql_query("SELECT * FROM `users`");
 $username = $_POST['username'];
   while ($name_db = mysql_fetch_array($result5)) {
       if($username==$name_db["username"])
       {
           $i=1;
           
       }
   }


if($i==1){
    


$con = mysql_connect('localhost', 'root', '');
    mysql_select_db('user', $con);


    $username1 = $_POST['username'];
   

    $result5 = mysql_query("SELECT * FROM `users`");
 
    $new_user = $_POST['new_username'];
    
      while ($name_db = mysql_fetch_array($result5)) {
          if($new_user== $name_db["username"])
          {
              echo "יוזר קיים";
              $flage=1;
          }
      }




if($flage==0)
{
    

$con = mysql_connect('localhost', 'root', '');
    mysql_select_db('user', $con);   
    $result5 = mysql_query("SELECT * FROM `users`"); 
    
    $username = $_POST['username'];
       $new_user = $_POST['new_username'];
       $new_pass = $_POST['password'];
        $new_email = $_POST['email'];
        $new_lastname = $_POST['new_lastname'];
        
        
        
        
        
    
         while ($name_db = mysql_fetch_array($result5)) {
             $username_db = $name_db['username'];
             
             if ($username == $username_db){
                 
                 if($new_user==""){
                $new_user= $username1;
            }
            if($new_lastname==""){
                $new_lastname= $name_db['last_name'];
            }
             if($new_email==""){
                $new_email= $name_db['mail'];
            }
             if($new_pass==""){
                $new_pass= $name_db['password'];
            }
            
             
                 mysql_query("UPDATE users SET username='$new_user' , password='$new_pass',mail='$new_email',last_name='$new_lastname' WHERE username='$username_db' ;");
      echo 'יוזר עודכן';
      header("Refresh:0");
             }
             
         }
         
         }
         }
 else {
             echo 'יוזר לא קיים';
 }
 }
?>

