<html>
    <head>	

        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="menu.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <p id="demo"></p>

</head>



<body>



           <h1>עדכון תפריטים</h1> 
      

        <div class="back">
            
            <input class="button-exit"  type="submit" onclick="func_php()" value="חזרה " />
        </div>
    
    <form name="form1" method="POST" action="edit_menu.php">

         
 <button class="button-xlarge pure-button" onclick="location.href='starters.html'">מנות פתיחה  </button></br></br>
<button class="button-xlarge pure-button"onclick="location.href='Main_dishes.html'" >מנות עיקריות</button></br></br>
<button class="button-xlarge pure-button" onclick="location.href='Side_dishes.html'">   תוספות</button></br></br>

<button class="button-xlarge pure-button" onclick="location.href='drinks.html'"> שתיה קלה/חמה</button></br></br>
<button class="button-xlarge pure-button" onclick="location.href='alcohol.html'">אלכוהול </button></br>
<button type="button" name="edit_desert" class="button-xlarge pure-button" onclick="location.href='edit_desserts.php'" >קינוחים</button></br></br>

       
  
</body>



        </html>
        <form name="form1" method="POST" action="edit_menu.php"> 
 <?php
 
 
 ?>