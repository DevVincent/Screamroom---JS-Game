<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    include('/php/head.php');
    head();
  ?>
  
  <link rel="stylesheet" type="text/css" href="/css/navbar.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/login.css" />

  <title>Screamroom - Info & Rules</title>
</head>

<body>

  <?php
    include('/php/common.php');
    outputNavigation("Login");
  ?>
  
  <main>
    <div class="loginPage">
    </div>
    <div class="loginBox">
      <h1 class = "loginHeading">Login</h1>
      <form action="">
        <p>Username</p>
        <input type="text" name = "" placeholder = "Enter Username">
        <p>Password</p>
        <input type="password" name = "" placeholder = "Enter Password">
        <input type="submit" name = "" vale = "Login">
        <a href="register.php">Don't have an acount? Register HERE.</a>
      </form>
    </div>
  </main>

  <?php
    outputFooter("Info & Rules");
  ?> 
  
  </body>
</html>