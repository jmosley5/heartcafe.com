<?php
include("inc/header.php");
include('inc/db_connection.php');
?>
<!DOCTYPE html>
<html>
<body>

  <header>
    <h1 class="home_text">Hello <?php echo $_GET['username'] ?>! Welcome to the Heart Cafe'.</h1>

      <h2 class="home_text">Have a seat. Take a breath. Get your heart back.</h2>
    <div class="home_page">
      <div class="video-container">
        <!--this is where the video will go -->

          <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLdsRvRJZNWBKVlqS-yUCoDLNiFnXWwen5" frameborder="0" allowfullscreen controls></iframe>
      </div>
    </div>
    </header>
</body>
<?php include("inc/footer.php"); ?>
</html>
