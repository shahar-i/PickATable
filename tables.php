<html>
    <head>
         <link rel="stylesheet" type="text/css" href="menu.css">
    </head>
    <body>
        <div >
            <table class="center">
            <tr>
                <td > 
                    <button  onclick="location.href='menu.php'">1</button> &nbsp; &nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <button onclick="location.href='menu.php'">2</button> &nbsp; &nbsp;&nbsp;&nbsp;
                </td>
                  <td > 
                    <button onclick="location.href='menu.php'">3</button> &nbsp; &nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <button onclick="location.href='menu.php'">4</button> &nbsp; &nbsp;&nbsp;&nbsp;
                </td>
            </tr>
               <tr>
                <td > 
                    <button onclick="location.href='menu.php'">5</button>
                </td>
                <td>
                    <button onclick="location.href='menu.php'">6</button>
                </td>
                  <td > 
                    <button onclick="location.href='menu.php'">7</button>
                </td>
                <td>
                    <button onclick="location.href='menu.php'">8</button>
                </td>
            </tr>
               <tr>
                <td > 
                    <button onclick="location.href='menu.php'">9</button>
                </td>
                <td>
                    <button onclick="location.href='menu.php'">10</button>
                </td>
                  <td > 
                    <button onclick="location.href='menu.php'">11</button>
                </td>
                <td>
                    <button onclick="location.href='menu.php'">12</button>
                </td>
            </tr>
               <tr>
                <td > 
                    <button onclick="location.href='menu.php'">13</button>
                </td>
                <td>
                    <button onclick="location.href='menu.php'">14</button>
                </td>
                  <td > 
                    <button onclick="location.href='menu.php'">15</button>
                </td>
                <td>
                    <button onclick="location.href='menu.php'">16</button>
                </td>
            </tr>
        </table>
        </div>
    </body>
</html>


<?php

//session_start();
//if(!isset($_SESSION['username'])){
//   header("Location:sign.in.php");
//}

$con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);

$result=mysql_query("SELECT * FROM tables");


if(mysql_num_rows($result))
{
  $my_arr = array();
while ($res = mysql_fetch_array($result)) {

?>
<html>
    <center>  <input class="button-exit"  onclick="location.href='menu.php'" name="<?php echo $res["table_name"]; ?> " type="button"  value= "<?php echo $res["table_name"]; ?> "/> </br></center>

</html>

<?php
 



  
}
}