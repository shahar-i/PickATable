<html>
    <head>  <link rel="stylesheet" type="text/css" href="menu.css"></head>
    <body >
        <h1>עדכון פרטי מלצר</h1>

        <form  action="edit_user.php" method="POST">
            <input id="name" type="text" placeholder="Username" name="username">
             <input id="name" type="text" placeholder="New Username" name="new_username">
             <input id="name" type="password" placeholder="Password" name="password">
            <input  class=""  type="submit"  name="Submit" value="אישור" /></br></br>

        </form> 
    </body>
</html>






<?php
if (isset($_POST['Submit'])) {

    $con = mysql_connect('localhost', 'root', '');
    mysql_select_db('user', $con);





    $username1 = $_POST['username'];


    $result5 = mysql_query("SELECT * FROM `users`");

    $i = 1;
    while ($name_db = mysql_fetch_array($result5)) {



        $username1 = $_POST['username'];
        $username2 = $name_db['username'];
        $new_user = $_POST['new_username'];
        $email = $_POST['email'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];


        if ($username1 == $username2) {
            echo 'kayam';
            $i = 0;
            if(isset($_POST[$username1])==$username2)
            $new_user=$username1;
                    mysql_query("UPDATE users SET username='$new_user' WHERE username='$username2';");

            break;
        }
    }

    if ($i == 1) {
        echo 'creart a new user';
        $_SESSION['username'] = $res['username'];
    }
}
?>

