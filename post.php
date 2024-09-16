<?php
Include "view-header.php";
?>

<h1>Post</h1>
  <p>In all lowercase, type in the name of the team you would like to see the matchup for!</p>
<form method = "post" action="post-result.php">
  <input type="text" name="team-name">
  <input type="submit" value="post data">
 <?php
Include "view-footer.php";
?>
