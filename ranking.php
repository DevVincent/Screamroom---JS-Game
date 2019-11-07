<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    include('/php/head.php');
    head();
  ?>

  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/position.css" />

  <title>Screamroom - Leaderboard</title>
</head>

<body>

  <?php
    include('/php/common.php');
    outputNavigation("Leaderboard");
  ?>
  
  <main>
    <div class="indexPage">
      <h1 class = "heading">Scoreboard - Best players</h1>
    </div>

  <?php
    outputFooter("Info & Rules");
  ?> 
   
  </main>
</body>
</html>