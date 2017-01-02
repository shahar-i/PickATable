<!DOCTYPE html>
<html>
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">

            body {
                font-family: "Trebuchet MS", Verdana, sans-serif;

                background-image: url("pici.png");
                background-repeat: no-repeat;
                background-attachment: fixed;

                font-size: 16px;
                background-color: #ffffff; 
                color: #696969;
                padding: 3px;
            }


            .main {
                text-align:center; 
                padding: 5px;
                padding-left:  15px;
                padding-right: 15px;

                border-radius: 0 0 5px 5px;


            }

            h1 {
                text-align:center; 
                font-family: Georgia, serif;
                border-bottom: 3px solid #cc9900;
                color: #996600;
                font-size: 50px;
            }

            .button-xlarge {
                font-size: 200%;
                width: 10em;  height: 2em;

            }

            .button-large {
                font-size: 110%;

            }

            .button-exit{

                font-size: 200%;
                width: 6em;  height: 2em;
                text-align:center; 

            }

            .G_M_M{
                font-size: 150%;
                width: 6em;  height: 2em;
                text-align:center; 

                position: relative;
                left: 6px;
                top: -446px;


            }

            .btn{
                padding: 5px;
                padding: 60px;
                padding-left:  15px;
                padding-right: 15px;

                border-radius: 0 0 5px 5px;

            }

            .back{
                text-align:center; 
                padding: 60px;
                padding-left:  20px;
                padding-right: 20px;

                border-radius: 0 0 10px 10px;
            }

            .Password_Recovery_Ok{

                font-size: 160%;
                width: 6em;  height: 2em;
                text-align:center; 

            }

            .button-exit2{

                font-size: 200%;
                width: 10em;  height: 2em;
                text-align:center; 

            }






        </style>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="menu.css">

    </head>


    <body>


        <form name="form1" method="POST" action="sign.in.php"

            <div class="main" >

                <h1>כניסת מנהל/מלצר</h1> 


                <div class="pure-control-group">

                    <input id="name" type="text" placeholder="Username" name="username">
                    <label for="name">:שם משתמש</label></br></br> 
                </div>

                <div class="pure-control-group">

                    <input id="password" type="password" placeholder="Password" name="password">
                    <label for="password">:ססמה</label></br></br></br></br>
                </div>


                <input class="Password_Recovery_Ok"  type="Submit"  name="Submit1" value="אישור"/></br></br>

                <input class="Password_Recovery_Ok"  type="button" onclick="location.href = 'Password_Recovery.php';" value="שכחתי ססמה" /></br></br></br></br></br></br></br>

                <div class="back">
                    <input class="button-exit"  type="button" onclick="location.href = 'menu.php';" value="חזרה לתפריט" />
                </div>

            </div>


</form>

    </body>
</html> 

<?php



$username = $_POST['username'];
$password = $_POST['password'];

$con = mysql_connect('localhost', 'root', '');
mysql_select_db('user', $con);

$result = mysql_query("SELECT * FROM users WHERE username='$username'AND password='$password'");


if (mysql_num_rows($result)) {

    $res = mysql_fetch_array($result);

    $user = $_POST['username'];
    $user_Db = $res['username'];

    if ($user == 'manager' && $user_Db == 'manager') {
        $_SESSION['username'] = $res['username'];

        header("location: manager.php");
    }else {

        $res = mysql_fetch_array($result);

        $_SESSION['username'] = $res['username'];
header("location: tables.php");
        
        
    }
    

  }
 else {
 echo'הפרטים אינם נכונים';
}
?>
