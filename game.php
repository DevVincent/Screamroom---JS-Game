<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    include('/php/head.php');
    head();
  ?>

  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/position.css" />
  <script type="text/javascript" src="js/game.js"></script>

  <title>Screamroom - Info & Rules</title>
</head>

<body>

  <?php
    include('/php/common.php');
    outputNavigation("Game");
  ?>
  
    <div class="gameDisplay">
      <canvas id="game" width="450" height="350"></canvas>
    </div>
</body>
</html>