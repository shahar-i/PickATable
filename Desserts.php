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
            
            <input class="button-exit"  type="submit" onclick="location.href = 'menu.php';" value="חזרה לתפריט" />
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
  $my_arr = array();
while ($res = mysql_fetch_array($result)) {

?>
<html>
    <center>  <input class="button-exit"   name="<?php echo $res["name"];?>" type="submit"  value= "<?php echo $res["name"]; echo $res["price"]; ?> "/> </br></center>
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
        
        
            $result2=mysql_query("INSERT INTO `user`.`invitation` (`name`, `price`) VALUES ('$named', '$price');");//מכניס לטבלת הזמנות מה שנבחר 
            
            break;
             
    
}
}

}



$con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);

$result=mysql_query("SELECT * FROM invitation");
if(mysql_num_rows($result)){
?>
<html><h4> פרטי הזמנה למלצר</h4><html>
 <?php

while ($res2 = mysql_fetch_array($result)) {// הדפסת טבלת הזמנה
    
    ?>
        <html><input  name="<?php echo $res2["name"];?>+5" type="submit"  value= "מחק פריט"/></html>
       
        <?php
        echo "שם פריט:",$res2["name"];
   print '<br />';
    echo "מחיר פריט:",$res2["price"];
     
    
print '<br />';print '<br />';
}


?>
        <html>  <textarea rows="4" cols="50" style="direction: rtl;" name="comments">
</textarea> 
         <input class=""  name="comments2" type="submit"  value= "שמור הערות"/>
          <input type="reset" value="מחק">
        </html>  
            
        <?php
}
}
$result=mysql_query("SELECT * FROM invitation");
if(mysql_num_rows($result)){

$i=0;
while ($res = mysql_fetch_array($result)) {
   $named2=$res["name"];

   print '<br />';
    $named=$res["name"];
    $named="$named+5";
  
    $price=$res["price"];
   
foreach ($my_arr as $key => $value ) {
    if($i==0){
    $value="$value+5";
    if (isset($_POST[$named])==$value)//בדיקה אם מה שנבחר נמצא בטבלה וגם במערך הקינוחים
        { 
        
           $result2=mysql_query("DELETE FROM `invitation` WHERE name='$named2' and price=$price LIMIT 1");//מכניס לטבלת הזמנות מה שנבחר 
 
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

$result=mysql_query("UPDATE `comments` SET `comment`='$comments' WHERE 1;");


}


?>