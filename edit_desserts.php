<html>
    <head>	

        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="menu.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <p id="demo"></p>

</head>



<body>

        <form name="form1" method="POST" action="edit_desserts.php">


           <h1>עדכון קינוחים</h1> 
      

        <div class="back">
            
            <input class="button-exit"  type="submit" onclick="location.href = 'menu.php';" value="חזרה " />
        </div>
    
       
    
        
        
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
<input  name="<?php echo $res["name"];?>+5" type="submit"  value= "מחק פריט"/>
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
    

 
   
    $named=$res["name"];
    $named="$named+5";

  
    $price=$res["price"];
   
foreach ($my_arr as $key => $value) {
    if($i==0){
    $value="$value+5";
   
    
   
    
    if (isset($_POST[$named])== $value)//בדיקה אם מה שנבחר נמצא בטבלה וגם במערך הקינוחים
        {  
        echo 'hjhjh';
        
           mysql_query("DELETE FROM `desserts` WHERE name='$named2' and price='$price' LIMIT 1 ");//מכניס לטבלת הזמנות מה שנבחר 
        
     header("Refresh:0");
        $i=1;
            break;
     
   
           }
    }
                     
       } 
   
}

}



?>









