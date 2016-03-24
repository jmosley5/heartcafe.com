<?php
include("inc/header.php");
?>
<!DOCTYPE html>
<html>
<body class="register_background_img">
  <header class="register_form">
    <form action="processRegistration.php" method="post" class="register">
     <p>Your name: <input type="text" name="name" required/></p>
     <p>Your username: <input type="text" name="username" required/></p>
     <p>Your email: <input type="text" name="email" required/></p>
     <p>Your password: <input type="text" name="password" required/></p>
     <p><input type="submit" name="submit" value="Submit me!" /></p>
    </form>
  </header>
</body>
</html>
