<?php
    include("../../include/config.php");
    include("../../include/db.php");
    include("functions.php");

    if(isset($_COOKIE['username'])) {
        ?>
		<html>
		   
		   <head>
		      <title>User Profile</title>
		      
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
		   <body>
		   	<div id="content">
			<h1><?=$_COOKIE['username']?></h1>
			<h3>wallet=<?=getWallet()?>$</h3>
			
				
				</div>
		   </body>
		</html>
        <?php
    }
    else
        echo "Please try to reconnect !";
?>