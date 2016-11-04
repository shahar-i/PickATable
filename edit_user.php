<html>
    <head>  <link rel="stylesheet" type="text/css" href="menu.css"></head>
    <body >
        <h1>עדכון פרטי מלצר</h1>
  
        <form  action="edit_user.php" method="POST">
           username:
           <input class="floatright" type="text" placeholder="Username" name="username" ><br>
           new username:
           <input  type="text" placeholder="New Username" name="new_username"><br>
           new password:
           <input id="name2" type="password" placeholder="Password" name="password"><br><br><br>
            <input  class=""  type="submit"  name="Submit" value="אישור" /></br></br>
           
        </form> 
    </body>
</html>



<?php
if (isset($_POST['Submit'])) {

    $con = mysql_connect('localhost', 'root', '');
    mysql_select_db('user', $con);


    $username1 = $_POST['username'];
    $new_pass = $_POST['password'];

    $result5 = mysql_query("SELECT * FROM `users`");

    $i = 1;
    while ($name_db = mysql_fetch_array($result5)) {



        $username1 = $_POST['username'];
        $username2 = $name_db['username'];
        $new_user = $_POST['new_username'];
        $new_pass = $_POST['password'];


        if ($username1 == $username2) {
            echo 'user exist';
            $i = 0;
            if(isset($_POST[$username1])==$username2)
            $new_user=$username1;
                    mysql_query("UPDATE users SET username='$new_user' , password='$new_pass' WHERE username='$username2' ;");

            break;
        }
    }

    if ($i == 1) {
        echo 'creart a new user';
        $_SESSION['username'] = $res['username'];
    }
}
?>

