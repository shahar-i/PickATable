<html>
    <head>	

        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="menu.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <p id="demo"></p>

</head>



<body align="center">

        <form  name="form1" method="POST" action="edit_desserts.php">


           <h1>עדכון קינוחים</h1> 
      

        <div class="back">
            
            <input class="button-exit"  type="button" onclick="location.href = 'edit_menu.php';" value="חזרה " />
        </div>
    
           <input  name="add_dessert" type="submit"  value= "הוסף קינוח"/> </br></br></br>
    
        
        
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
    <center>  <input class="button-exit"   name="<?php echo $res["name"];?>" type="submit"  value= "<?php echo $res["name"]; echo $res["price"]; ?> "/></center>
<input  name="<?php echo$res["name"];?>+5" type="submit"  value= "מחק פריט"/>
<input  name="<?php echo$res["name"];?>+6" type="submit"  value= "עדכון "/>

</html>
<?php
 

$my_arr[] = $res["name"];//מערך ששומר את שמות הקינוחים
// print_r($my_arr);
}


//$my_arr2 = array();//מערך ששומר את הערכים שנבחרו
}


$con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);
$result=mysql_query("SELECT * FROM desserts");

if(mysql_num_rows($result)){

$i=0;
while ($res = mysql_fetch_array($result)) {
   $named2=$res["name"];
    
 
    $named=$res["name"];//בשביל כפתור מחק
    $named="$named+5";

 
    $price=$res["price"];
   
foreach ($my_arr as $key => $value) {
    if($i==0){
    $value="$value+5";
   
   
    if (isset($_POST[$named])== $value)//בדיקה אם מה שנבחר נמצא בטבלה וגם במערך הקינוחים
        {  
        
           mysql_query("DELETE FROM `desserts` WHERE name='$named2' and price='$price' LIMIT 1 ");//מכניס לטבלת הזמנות מה שנבחר 
        
     header("Refresh:0");
        $i=1;
            break;
     
   
           }
    }
                     
       } 
   
}

}
error_reporting(E_ERROR | E_PARSE);//Remove warning


$con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);
$result=mysql_query("SELECT * FROM desserts");

if(mysql_num_rows($result)){

$i=0;
while ($res = mysql_fetch_array($result)) {
   $named2=$res["name"];
    

 
   $edit2=$res["name"];
    $edit=$res["name"];//בשביל כפתור עדכון
    $edit="$edit+6";

    
    
    
    $price=$res["price"];
   
foreach ($my_arr as $key => $value) {
    if($i==0){
    $value="$value+6";
   
    
    if (isset($_POST[$edit])== $value)//בדיקה אם מה שנבחר נמצא בטבלה וגם במערך הקינוחים
        {  
        ?>
        
<html> </br></br></br><apsn>שנה שם</apsn> <textarea class="text_hide2" rows="2" cols="20" style="direction: rtl;" name="edit_name"><?php echo $res["name"];?></textarea></br></br></br>
  <apsn>שנה מחיר</apsn>  <textarea class="text_hide2" rows="2" cols="20" style="direction: rtl;" name="edit_price"><?php echo $res["price"];?></textarea></br></br></br>
 <input class=""  name="<?php echo $res["name"];?>+save" type="submit"  value= "שמור שינויים"/>
</html>
<?php    
     
    // header("Refresh:0");
        $i=1;
            break;
     
   
           }
    }
                     
       } 
   
}

}

    $con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);
$result=mysql_query("SELECT * FROM desserts");

 if(mysql_num_rows($result))
{
  $my_arr = array();
while ($res = mysql_fetch_array($result)) {


$my_arr[] = $res["name"];//מערך ששומר את שמות הקינוחים

}



}
    
    
$con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);
  

$result=mysql_query("SELECT * FROM desserts");
if(mysql_num_rows($result)){

$i=0;
while ($res = mysql_fetch_array($result)) {
   $named2=$res["name"];
    
 
    $named=$res["name"];
    $named="$named+save";

 
    $price=$res["price"];
   
foreach ($my_arr as $key => $value) {
    if($i==0){
    $value="$value+save";
   
    $name_desert=$_POST['edit_name'];
   $price_dessert=$_POST['edit_price'];
    if (isset($_POST[$named])== $value)//בדיקה אם מה שנבחר נמצא בטבלה וגם במערך הקינוחים
        {  
        
        
        mysql_query("UPDATE `desserts` SET `name`='$name_desert',`price`='$price_dessert' WHERE name='$named2'");
        
     header("Refresh:0");
        $i=1;
            break;
     
   
           }
    }
                     
       } 
   
}

}




if (isset($_POST["add_dessert"]))
{
    


?>
<html> </br></br></br><apsn>הכנס שם </apsn> <textarea class="text_hide2" rows="2" cols="20" style="direction: rtl;" name="add_name"></textarea></br></br></br>
  <apsn>הכנס מחיר</apsn>  <textarea class="text_hide2" rows="2" cols="20" style="direction: rtl;" name="add_price"></textarea></br></br></br>
 <input class=""  name="save_add_dessert" type="submit"  value= "שמור שינויים"/>
</html>

<?php


}

if (isset($_POST["save_add_dessert"]))
{
    
$con=mysql_connect('localhost','root','');
mysql_select_db('user',$con);
$result=mysql_query("SELECT * FROM desserts");

$name_desert2=$_POST['add_name'];
$price_dessert2=$_POST['add_price'];
$i=0;

if(mysql_num_rows($result))
{

while ($res = mysql_fetch_array($result)) {

if($res["name"]== $name_desert2)
{


    $i=1;//אם הקינוח קיים המשתנה ישתנה לאחד  ולא יכנס לשאילתא  של ההוספה
     echo '<script type="text/javascript">alert(" קינוח כבר קיים ")</script>';
}
}



}


if($i==0)
{
mysql_query("INSERT INTO `desserts`(`name`, `price`) VALUES ('$name_desert2','$price_dessert2')");//מוסיף לטבלת קינוחים קינוח חדש

header("Refresh:0");
}
}

?>









