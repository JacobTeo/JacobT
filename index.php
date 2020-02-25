<?php
session_start();
if (isset($_SESSION['appuser'])) {
  $username=$_SESSION['appuser'];
}
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="CSS/style_sheet.css" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <title>Fox Games Stock manager</title>
  </head>
  <body>
    <div class=title>
      <h2>Fox Games</h2>
    </div>
    <div class="logged_in">
      <?php
      if (isset($username)) {
        echo"<p>Welcome $username: <a href=utils/logout.php>Logout?</a></p>";
      }else {
        echo"<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Welcome Guest</p>";
      };
      ?>
    </div>
    <ul class="topnav">
      <li><a href="./index.php">Home</a></li>
      <li><a href="./challenge.php">Challenge</a></li>
      <li id="logged_in">
        <?php
        if (isset($username)) {

        }else {
          echo"<a href='./login_page.php'>Staff Login</a>";
        };?>
      </li>
    </ul>
  </body>
</html>
