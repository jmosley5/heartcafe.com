<?php
include("inc/header.php");
include('inc/db_connection.php');
?>
<!DOCTYPE html>
<html>
<body class="login_background_img">
  <header class="header_form">
    <form action="user_login.php" method="post" class="login">
     <p>Your username: <input type="text" name="username" required/></p>
     <p>Your password: <input type="text" name="password" required/></p>
     <p><input type="submit" name="submit" value="Submit me!" required/></p>
    </form>
  </header>
</body>
</html>
