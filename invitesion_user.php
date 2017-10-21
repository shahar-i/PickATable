

<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="DF.css">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="menu.css">



</head>

    
<body>
 <p id="demo"></p>


	<div class="main" >
  <h1>תפריט</h1> 
  </html>
  <?php
session_start();
 ?>
<html><span>שלום:</span></html>
<?php
 echo $_SESSION['sign_user'];//שם מלצר שהתחבר 
 echo  ' ';
 echo 'שולחן מספר';
  echo $_SESSION['number_table'];//מספר שולחן
$num_table=$_SESSION['number_table'];


     


?>
 <html>

 <button class="button-xlarge pure-button" onclick="location.href='starters.html'">מנות פתיחה  </button></br></br>
<button class="button-xlarge pure-button"onclick="location.href='Main_dishes.html'" >מנות עיקריות</button></br></br>
<button class="button-xlarge pure-button" onclick="location.href='Side_dishes.html'">   תוספות</button></br></br>
<button class="button-xlarge pure-button"onclick="location.href='Desserts.php'">קינוחים</button></br></br>
<button class="button-xlarge pure-button" onclick="location.href='drinks.html'"> שתיה קלה/חמה</button></br></br>
<button class="button-xlarge pure-button" onclick="location.href='alcohol.html'">אלכוהול </button></br>


</div>

</html>

<?php
?>
<html><span>הזמנות לשולחן מספר :</span></html>
<?php
echo $num_table;

print '<br /><br /><br />';
$con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);

$result=mysql_query("SELECT * FROM `$num_table`");
if(mysql_num_rows($result)){
    while ($res2 = mysql_fetch_array($result)) {
        
  
         echo 'שם פריט:'; echo $res2["name"]; 
       print '<br />';
      echo 'מחיר :';   echo   $res2["price"];
print '<br />';
       echo 'שם מלצר :'; echo   $res2["name_user"];
       print '<br />';print '<br />';print '<br />';
         }
}

  $con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);

$result1 = mysql_query("SELECT comment FROM `comments` WHERE `num_table`='$num_table';");

$row = mysql_fetch_row($result1);
$shaeRating = $row[0];
echo 'הערות: ';
echo $shaeRating;

 $_SESSION['comentt'] = $shaeRating;//שומר הערות 
?>

<html>



 <a href="tables.php"><img src="back.png"></a> 

</body>


</html>


