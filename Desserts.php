<!DOCTYPE html>
<html>
    <head>	

        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="menu.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <p id="demo"></p>

</head>



<body>

    
<!--    <p id="demo"></p>

    <div id="main" >
        <table border=2 class="center">
-->            <h1>קינוחים</h1> <!--
            <tr>
                <th>מחיר</th>
                <th>שם מנה</th>
                <th>תמונה</th>
            </tr>


            <td>50</td><td> שם מנה</td><td>תמונה</td><td><input type="button" name="קוסקוס"  onclick="handleClick(name);" /><tr>
                <td>50</td><td>שם מנה</td><td>תמונה</td><td><input type="button" name="מסבחה" onclick="handleClick(name);" /><tr>
                <td>50</td><td>שם מנה</td><td>תמונה</td><td><input type="button" name="פלאפל" onclick="handleClick(name);" /><tr>
                <td>60</td><td>שם מנה</td><td>תמונה</td><td><input type="button" name="פסטה" onclick="handleClick(name);" /><tr>
                <td>50</td><td>שם מנה</td><td>תמונה</td><td><input type="button" name="שווארמה" onclick="handleClick(name);" /><tr>
                <td>50</td><td>שם מנה</td><td>תמונה</td><td><input type="button" name="חמוסטה" onclick="handleClick(name);" /><tr>
                <td>50</td><td>שם מנה</td><td>תמונה</td><td><input type="button" name="מרק" onclick="handleClick(name);" /><tr>
                <td>50</td><td>שם מנה</td><td>תמונה</td><td><input type="button" name="חזה עוף" onclick="handleClick(name);" /><tr>
            </tr></tr></tr></tr></tr></tr></tr>

        </table>

-->

        <button id="btn2" onclick="handleClick(this);" >הוסף להזמנה</button>



        <div class="back">
            
            <input class="button-exit"  type="button" onclick="location.href = 'menu.php';" value="חזרה לתפריט" />
        </div>
    </div>
    <form name="form1" method="POST" action="Desserts.php">

</body>


</html> 

<?php



$con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);

$result=mysql_query("SELECT * FROM desserts");


if(mysql_num_rows($result))
{
 
  

  
while ($res = mysql_fetch_array($result)) {

?>
<html>
    <center>  <input class="button-exit"   name="<?php echo $res["name"]; ?> " type="button"  value= "<?php echo $res["name"]; echo $res["price"]; ?> "/> </br></center>
</html>
    
    
  <?php 
       
}
  
if(isset($_POST[$res["name"]]))
{
    echo 'name';
}
}

?>

