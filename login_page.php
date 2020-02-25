<?php
session_start();
if (isset($_SESSION['apperror'])) {
  $error_message = $_SESSION['apperror'];
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="CSS/style_sheet.css" rel='stylesheet' type='text/css'/>
    <script src="utils/validation.js"></script>
    <meta charset="utf-8">
    <title>Login page</title>
  </head>
  <body>
    <div class="login_menu">
      <div class="LC_body">
        <a href="./index.php">Fox Games</a>
        <h2>Login</h2>
        <form name="loginForm" action="utils/validation.php" method="post" onsubmit="return validateForm();">
          <p>Enter your Username:</p>
          <input type="text" name="username" value=""> <p>Enter your Password:</p>
          <?php
          if (isset($error_message)) { echo "<p style='color:red;'>$error_message: Try again</p>"; session_unset(); };?>
          <input type="password" name="password" value=""> <input type="submit" value="Login">
        </form>
      </div>
    </div>
  </body>
</html>
