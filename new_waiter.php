<html>
    <head>  <link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body >
        <h1>רישום מלצר חדש</h1>

        <form class="pure-form" action="new_waiter.php" method="POST">
            
            <input id="name" type="text" placeholder="Username" name="username">
            <input id="name" type="password" placeholder="Password" name="password">
            <input id="name" type="email" placeholder="email" name="email">
            <input id="name" type="text" placeholder="Last name" name="last_name">

            <input class="pure-button" class="pure-button pure-button-primary"  type="submit"  name="Submit" value="אישור" /></br></br>

        </form> 
        
        
        
        
        
        
    </body>
</html>
 <form  action="edit_user.php" method="POST">
    <div class="form-group">
      <label for="text">username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="username">
    </div>
    
  
        <div class="form-group">
      <label for="pwd">password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password:" name="password">
    </div>
      
        <div class="form-group">
      <label for="pwd">email:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter email:" name="email">
    </div>
      
       <div class="form-group">
      <label for="pwd">last name:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter last name:" name="last_name">
    </div>
      
       
      
    <button type="submit"  name="SSubmit" class="btn btn-default">שמור שינויים</button>
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
if (isset($_POST['SSubmit'])) {

    $con = mysql_connect('localhost', 'root', '');
    mysql_select_db('user', $con);


    $username1 = $_POST['username'];


    $result5 = mysql_query("SELECT * FROM `users`");

    $i = 1;
    while ($name_db = mysql_fetch_array($result5)) {



        $username1 = $_POST['username'];
        $username2 = $name_db['username'];
        $email = $_POST['email'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];


        if ($username1 == $username2) {
            echo 'kayam';
            $i = 0;
            break;
        }
    }

    if ($i == 1) {
        echo 'new user created';
        $_SESSION['username'] = $res['username'];
        mysql_query("INSERT INTO `user`.`users` (`username`, `last_name`,`password`, `mail`) VALUES ('$username1', '$last_name', '$password', '$email');");
   
      
        
    }
}
?>

