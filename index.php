<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    include('/php/head.php');
    head();
  ?>

  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <script type="text/javascript" src="js/carousel.js"></script>

  <title>Screamroom - Info & Rules</title>
</head>

<body>

  <?php
    include('/php/common.php');
    outputNavigation("Info & Rules");
  ?>
 
  <main>
    <div class="indexPage">
      <h1 class = "heading">Screamroom – A survival tilebased game</h1>
    </div>
    <div class="gamepic">
        <img src="/img/Img1.jpg" alt="" height="300" width="600" class = "imgGame">
    </div>
    <div class="intro">                     
          <h1 class = "subheading">About the game</h1>
          <p class="infoText">          
              Screamroom is a third person shooter in which your main objective is last for as long as you possibly can. 
          </p>  
          <p class =  "infoText">
              Enemies wont stop coming one after another!
          </p>              
    </div>     
      <div class="controlsRules">
        <div class="controls">
          <h1 class ="subheading2">Controls</h1>
          <p class = "infoText">➣  Run through the rooms using the ARROW KEYS</p>
          <p class = "infoText">➣  Get power ups to go through the walls and avoid the enemies </br>by using the SPACE BAR or kill then using the W KEY.</p></p>
          <p class = "infoText">➣  Your health is determined by hearths. When you run out of hearts, you die.</p> 
        </div>
        <div class="rules">
          <h1 class = "subheading2">Rules</h1>          
          <p class =  "infoText">➣  Just survive somehow. </br></p>
          <p class =  "infoText">➣  Do not use any glitch the game may have to increase your score. </br></p>
          <p class =  "infoText">➣  Have fun!</p>  
          
        </div>
        
      </div>
      <div class="playnow">
        <button class = "playme"><a class = "navLink" href="game.php">PLAY NOW</a></button>
      </div>
      <div class="tipsTricks">
          <h1 class = "subheading2">Tips and Tricks</h1>
          <p class =  "infoText">➣  You can choose between three difficulty levels, easy, normal and hard for the best experience.</br></p>
          <p class =  "infoText">➣  This game is made in such a way that you will end up dying over time. However, the amount of time you survive is determined mainly by your skill and reflexes.</br></p>
          <p class =  "infoText">➣  Enemies have different behaviours depending on their type. Watch their behaviour closely to anticipate their movements!</p> 
      </div>

  <?php
    outputFooter("Info & Rules");
  ?>    

  </main>
  
</body>
</html>