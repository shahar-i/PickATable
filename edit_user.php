<html>
    <head>  <link rel="stylesheet" type="text/css" href="menu.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body align="LEFT">
        <h1>עדכון פרטי מלצר</h1>
        
        <div class="container">

  <form  action="edit_user.php" method="POST">
    <div class="form-group">
      <label for="text">username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="username">
    </div>
    
  
        <div class="form-group">
      <label for="pwd">new username:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter new username:" name="new_username">
    </div>
      
        <div class="form-group">
      <label for="pwd">new last name:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter new last name:" name="new_lastname">
    </div>
      
       <div class="form-group">
      <label for="pwd">new password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter new password:" name="password">
    </div>
      
        <div class="form-group">
      <label for="pwd"> new email:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter new email:" name="email">
    </div>
      
    <button type="submit"  name="Submit" class="btn btn-default">שמור שינויים</button>
  </form>
</div>
        
                   <div class="back">            
        </form> 
        <div class="container">
 
                                           
  <div class="table-responsive">          
  <table class="table">
    <thead>
    <?php
    $count=1;
    
    ?>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
       
      </tr>
    </thead>
    <tbody>
            <?php
        $con = mysql_connect('localhost', 'root', '');
    mysql_select_db('user', $con);
    $result5 = mysql_query("SELECT * FROM `users`");


        while ($name_db = mysql_fetch_array($result5)) {

   

    ?>
      <tr>
        <td><?php echo $count++; ?></td>
        <td><?php echo $name_db['username']; ?></td>
        <td><?php  echo $name_db['last_name']; ?></td>
        <td><?php echo $name_db['mail']; ?></td>
        <?php
         }
          ?>
      </tr>
    </tbody>
  </table>
  </div>
</div>
        
    </body>
</html>



<?php


if (isset($_POST['Submit'])) {

    $con = mysql_connect('localhost', 'root', '');
    mysql_select_db('user', $con);


    $username1 = $_POST['username'];
    $new_pass = $_POST['password'];

    $result5 = mysql_query("SELECT * FROM `users`");
 
    $i = 1;
    while ($name_db = mysql_fetch_array($result5)) {


       
        $username1 = $_POST['username'];
        $username2 = $name_db['username'];
        $new_user = $_POST['new_username'];
        $new_pass = $_POST['password'];
        $new_email = $_POST['email'];
        $new_lastname = $_POST['new_lastname'];

        if ($username1 == $username2) {
            if($new_user==""){
                $new_user= $username1;
            }
            if($new_lastname==""){
                $new_lastname= $name_db['last_name'];
            }
             if($new_email==""){
                $new_email= $name_db['mail'];
            }
             if($new_pass==""){
                $new_pass= $name_db['password'];
            }
            
      
            $i = 0;
            if(isset($_POST[$username1])==$username2 )
            $new_user=$username1;
                    mysql_query("UPDATE users SET username='$new_user' , password='$new_pass',mail='$new_email',last_name='$new_lastname' WHERE username='$username2' ;");
      echo 'user exist and edited';
      header("Refresh:0");
            break;
        }
    }

    if ($i == 1) {
        echo 'creart a new user ';
      //  $_SESSION['username'] = $res['username'];
    }
    
   
    
    
}
?>

<html>
     <input class="button-exit"  type="button" onclick="location.href = 'manager.php'" value="חזרה" />
</html>