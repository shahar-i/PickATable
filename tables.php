 
<html>
    <head>
         <link rel="stylesheet" type="text/css" href="menu.css">
    </head>
    <body>
        <form  action="tables.php" method="POST">
        <div >
           
            <table class="center">
            <tr>
                <td > 
                    <input type="submit"  value="1" name="table1" onclick=""></input> &nbsp; &nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <input type="submit" value="2" name="table2" onclick="location.href='invitesion_user.php'"></input> &nbsp; &nbsp;&nbsp;&nbsp;
                </td>
                  <td > 
                    <input type="submit" value="3" name="table3" onclick="location.href='invitesion_user.php'"></input> &nbsp; &nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <input type="submit" name="table4" value="4" onclick="location.href='invitesion_user.php'"></input> &nbsp; &nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            
           </form>
            </tr>
        </table>
        </html>
         <?php
session_start();
 

 echo $_SESSION['sign_user'];//שם מלצר שהתחבר 
?>
<html><span> :שלום</span></html>


<html>
            
            </br> </br> </br> </br>
             <a href="sign.in.php"><img src="back.png"></a> 
        </div>
    </body>
</html>


<?php

if (isset($_POST['table1'])) {
  
    
    $_SESSION['number_table'] = "1";//שומר את היוזר  המספר שולחן שנבחר 
    header("Location: invitesion_user.php");
    exit;
}

if (isset($_POST['table2'])) {
  
    
    $_SESSION['number_table'] = "2";//שומר את היוזר  המספר שולחן שנבחר 
    header("Location: invitesion_user.php");
    exit;
}
if (isset($_POST['table3'])) {
  
    
    $_SESSION['number_table'] = "3";//שומר את היוזר  המספר שולחן שנבחר 
    header("Location: invitesion_user.php");
    exit;
}
if (isset($_POST['table4'])) {
  
    
    $_SESSION['number_table'] = "4";//שומר את היוזר  המספר שולחן שנבחר 
    header("Location: invitesion_user.php");
    exit;
}


?>