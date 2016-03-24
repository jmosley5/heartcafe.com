<?php
include("inc/header.php");
//echo "<div style ='font:11px/21px Arial,tahoma,sans-serif;color:#ff0000'> Movie List for $key 2013</div>";

echo "<div class='thank_you' style='font-family:Averia Sans Libre, cursive;'>Hello ". $_GET["username"] . "! So glad you&#8217;re here!</div>";
$username = $_GET["username"];
echo "<meta http-equiv=\"refresh\" content=\"3;URL=home.php?username=$username\">";

 ?>
 <html>
     <body class="thankYou_background_img">
       <header class="thank_you">
         <h1>Redirecting in 3 seconds...</h1>
       </header>
     </body>
 </html>
