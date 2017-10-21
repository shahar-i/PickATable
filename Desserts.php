<!DOCTYPE html>
<html>
    <head>	

        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="menu.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
    <p id="demo"></p>

</head>



<body>

    

           <h1>קינוחים</h1> 
      
        



        <div class="back">
            
           <a href="invitesion_user.php"><img src="back.png"></a> 
        </div>
    </div>
    <form name="form1" method="POST" action="Desserts.php">

</body>


</html> 
  <?php
session_start();
 ?>
<html><span>שלום:</span></html>
<?php
 echo $_SESSION['sign_user'];//היוזר שהתחבר
 $name_user=$_SESSION['sign_user'];//היוזר שהתחבר
 echo nl2br ("\n");
 echo 'שולחן מספר';
 echo $_SESSION['number_table'];//מספר שולחן
$num_table=$_SESSION['number_table'];
?>


<?php


$con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);

$result=mysql_query("SELECT * FROM desserts");


if(mysql_num_rows($result))
{
  $my_arr = array();
while ($res = mysql_fetch_array($result)) {

?>
<html>
    <center>  <input class="button-exit"   name="<?php echo $res["name"];?>" type="submit"  value= "<?php echo $res["name"]; echo $res["price"]; ?> "/> </br>   </center>
</html>
<?php
 

$my_arr[] = $res["name"];//מערך ששומר את שמות הקינוחים
// print_r($my_arr);
}


    
$con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);

$result=mysql_query("SELECT * FROM desserts");

//$my_arr2 = array();//מערך ששומר את הערכים שנבחרו
while ($res = mysql_fetch_array($result)) {
    
    $named=$res["name"];
    $price=$res["price"];
    
foreach ($my_arr as $key => $value) {
  
    if(isset($_POST[$named])== $value)//בדיקה אם מה שנבחר נמצא בטבלה וגם במערך הקינוחים
        { 
        
        
            $result2=mysql_query("INSERT INTO `user`.`$num_table` (`name`, `price` , `name_user`) VALUES ('$named', '$price' , '$name_user');");//מכניס לטבלת הזמנות מה שנבחר 
            
            break;
             
    
}
}

}



$con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);

$result=mysql_query("SELECT * FROM `$num_table`");
if(mysql_num_rows($result)){
?>
<html><h4> פרטי הזמנה למלצר</h4><html>
        <?php
        
    $resultt=mysql_query("SELECT * FROM `comments`");//עובר על טבלת הערות ושומר את ההערה במשתנה
while ($resi = mysql_fetch_array($resultt)) {

$comant=$resi["comment"];  
       
}    


while ($res2 = mysql_fetch_array($result)) {// הדפסת טבלת הזמנה
    
    ?>
        <html><input  name="<?php echo $res2["name"];?>+5" type="submit"  value= "מחק פריט"/></html>
       
        <?php
        echo "שם פריט:",$res2["name"];
   print '<br />';
    echo "מחיר פריט:",$res2["price"];
      print '<br />';
    echo "שם מלצר:",$res2["name_user"];
    
print '<br />';print '<br />';
}

?>
        <html>  <textarea class="text_hide" rows="4" cols="50" style="direction: rtl;" name="comments">
<?php
 echo   $comant;//מדפיס לתוך הטקסט מטבלת הערות לאחר השמירת השמתנה
 
 echo $_SESSION['comentt'];
 
?>
</textarea> 
         <input class=""  name="comments2" type="submit"  value= "שמור הערות"/>
          <input type="reset" value="מחק">
        </html>  
            
        <?php
}
}
$result=mysql_query("SELECT * FROM `$num_table`");
if(mysql_num_rows($result)){
    
$i=0;
while ($res = mysql_fetch_array($result)) {
   $named2=$res["name"];

   print '<br />';
    $named=$res["name"];
    $named="$named+5";
  
    $price=$res["price"];
   
foreach ($my_arr as $key => $value) {
    if($i==0){
    $value="$value+5";
    if (isset($_POST[$named])==$value)//בדיקה אם מה שנבחר נמצא בטבלה וגם במערך הקינוחים
        { 
        
           $result2=mysql_query("DELETE FROM `$num_table` WHERE name='$named2' and price=$price LIMIT 1 ");//מכניס לטבלת הזמנות מה שנבחר 
        
        header("Refresh:0");
        $i=1;
            break;
     
   
           }
    }
                     
       } 
   
}

}
if (isset($_POST["comments2"]))
{
   
   $con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);
$comments=$_POST['comments'];

$result=mysql_query("UPDATE `comments` SET `comment`='$comments'  WHERE  `num_table`='$num_table';");
?>               
        <script>
            $('.text_hide').hide();
            </script>
            <html>  <textarea class="text_hide2" rows="4" cols="50" style="direction: rtl;" name="comments">
<?php
 $con=mysql_connect('localhost','root','');//מתחבר לבסיס נתונים על מנת להדפיס הערות לשדה הערות
mysql_select_db('user',$con);

$result1 = mysql_query("SELECT comment FROM `comments` WHERE `num_table`='$num_table';");

$row = mysql_fetch_row($result1);
$shaeRating = $row[0];



 $_SESSION['comentt'] = $shaeRating;//שומר הערות 
 echo $_SESSION['comentt'];
    
 
 
?>
</textarea> 
     </html>
     
    <?php


}


?>