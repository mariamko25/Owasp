<?php
include("../../include/config.php");
include("../../include/db.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        global $DB_DB;
        // Username and password sent from form.
//        $myusername = mysqli_real_escape_string($db, $_POST['username']);
//        $mypassword = mysqli_real_escape_string($db, $_POST['password']);
        $myusername = $_POST['username'];
        $mypassword = $_POST['password'];

        $sql = "SELECT COUNT(id) as nb FROM Users WHERE username = '$myusername' and password = '$mypassword'";
        $count = $DB_DB->query($sql)->fetch()['nb'];

        // If result matched $myusername and $mypassword, table row must be 1 row.
        if($count == 1) {
            setcookie('username', $myusername, time() + 24*3600);
            header("location: profil.php");
        }
        else
            $error = "Your Login Name or Password is invalid.";
    }
?>

<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset($error)) echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>