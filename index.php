<?php
include("inc/header.php");
$name = "Judy";

?>


<body>


<h1>Hello <?php echo $name ?>! Welcome to Heart Cafe'!</h1>

<p>This is an example of the text</p>

  <div>
    <!--this is where the video will go -->

      <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLdsRvRJZNWBKVlqS-yUCoDLNiFnXWwen5" frameborder="0" allowfullscreen controls></iframe>


</video>
  </div>

  <div>
    <!--this is where the comments will go -->
    <form method="post">
      <label>Comment</label>
      <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
      <input type="submit" value="Submit">
    </form>

  </div>
</body>
<?php include("inc/footer.php"); ?>
</html>
