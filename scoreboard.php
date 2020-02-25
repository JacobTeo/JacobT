<!DOCTYPE html>
<html>
<head>
  <link href="CSS/style_sheet.css" rel='stylesheet' type='text/css'/>
  <style>
  #container {
    width: 600px;
    align: centered;
    height: auto;
  }

  .row {
    position: relative;
    display: block;
    width: 200%;
    height: 40px;
    border-bottom: 1px solid #AFAFAF;
  }

  .name {
    position:left;
    display: inline-block;
    width: 75%;
    line-height: 45px;
  }

  .score {
    position: relative;
    display: inline-block;
    width: 25%;
  }

  .row:nth-child(1) {
    background: gold;
  }

  .row:nth-child(2) {
    background: #c0c0c0;
  }

  .row:nth-child(3) {
    background: #cd7f32;
  }
  </style>
</head>
<div class="LC_body">
  <a style = "font-family:copperplate;font-size:50px;font-style:oblique;" href="./index.php">Treasure Hunt</a>
  <ul class="topnav">
    <li><a href="./challenge.php">Challenge</a></li>
    <li><a href="./scoreboard.php">Scoreboard</a></li>
    <li><a href="./rewards.php">Rewards</a></li>
  </ul>
<body id="leaderboard">
<div id="container">
  <div class="row">
    <div class="name">Player1</div><div class="score">40 <span>&#11088;</span> </div>
  </div>

  <div class="row">
    <div class="name">Player2</div><div class="score">38 <span>&#11088;</span> </div>
  </div>

  <div class="row">
    <div class="name">Player3</div><div class="score">31 <span>&#11088;</span> </div>
  </div>

  <div class="row">
    <div class="name">Player4</div><div class="score">24  <span>&#11088;</span></div>
  </div>

  <div class="row">
    <div class="name">Player5</div><div class="score">19 <span>&#11088;</span> </div>
  </div>
</div>
</body>
<script type = "text/javascript">
document.addEventListener('DOMContentLoaded', () => {
  let elements = []
  let container = document.querySelector('#container')
  // Add each row to the array
  container.querySelectorAll('.row').forEach(el => elements.push(el))
  // Clear the container
  container.innerHTML = ''
  // Sort the array from highest to lowest
  elements.sort((a, b) => b.querySelector('.score').textContent - a.querySelector('.score').textContent)
  // Put the elements back into the container
  elements.forEach(e => container.appendChild(e))
})
</script>
</body>
</html>
