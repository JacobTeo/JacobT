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
    <meta charset="utf-8">
    <title style = "font-family:monaco;font-size:16px;font-style:italic;">Challenge</title>
  </head>
  <body>
    <div class="challenge_page">
      <div class="LC_body">
        <a style = "font-family:copperplate;font-size:50px;font-style:oblique;" href="./index.php">Treasure Hunt</a>
        <ul class="topnav">
          <li><a href="./challenge.php">Challenge</a></li>
          <li><a href="./scoreboard.php">Scoreboard</a></li>
          <li><a href="./rewards.php">Rewards</a></li>
        </ul>
        <h1> Rules </h1>
        <p style = "font-family:candara;font-size:20px;font-style:bold;">
          Students scan QR code for question that they need to answer <br />


Each student gets a unique ID that only they know and may ask other students for theirs to gain a star <span>&#11088;</span>. <br />
Each unique ID is also specific towards the nationality of the student , they gain extra points if they receive a unique ID from a student of another nationality.

Hunt Down The Stars!
</p>
        <h2>Info</h2>
        <h3>Achievements</h3>
        <p style = "font-family:candara;font-size:20px;font-style:bold;">
        Talk to 5 students from different countries. <span>&#11088;</span>  <br />
Talk to 7 students from different countries. <span>&#11088;</span><span>&#11088;</span> <br />
Talk to 10 students from different countries. <span>&#11088;</span><span>&#11088;</span><span>&#11088;</span> <br />
<br />
<br />
Find 5 different Qr code quiz eggs <span>&#11088;</span> <br />
Find 7 different Qr code quiz eggs <span>&#11088;</span><span>&#11088;</span> <br />
Find 10 different Qr code quiz eggs <span>&#11088;</span><span>&#11088;</span><span>&#11088;</span> <br />
<br />
<br />
Answered 5 quiz correctly <span>&#11088;</span> <br />
Answered 7 quiz correctly <span>&#11088;</span><span>&#11088;</span> <br />
Answered 10 quiz correctly <span>&#11088;</span><span>&#11088;</span><span>&#11088;</span> <br />
<br />
<br />
Group of 2 <span>&#11088;</span> <br />
Group of 3 <span>&#11088;</span><span>&#11088;</span> <br />
Group of 4 <span>&#11088;</span><span>&#11088;</span><span>&#11088;</span> <br />
</p>

        <h4>Extra Points!</h4>
        <p style = "font-family:candara;font-size:20px;font-style:bold;">
Find out the history of the building which the QR code resides. <span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span>

</p>
      </div>
    </div>
  </body>
</html>
