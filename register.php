<!DOCTYPE html>
<html lang="en">

<head>
  
  <?php
    include('/php/head.php');
    head();
  ?>
  
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/register.css" />

  <title>Screamroom - Info & Rules</title>
</head>

<body>

  <?php
    include('/php/common.php');
    outputNavigation("Register");
  ?> 

<main>
  <div class="registerPage">
  </div>
  <div class="registerBox">
    <h1 class = "registerHeading">Register</h1>
    <form action="">
        <p>Username</p>
        <input type="text" name = "" placeholder = "Create Username">
        <p>Password</p>
        <input type="password" name = "" placeholder = "Create Password">
        <p>Repeat Password</p>
        <input type="password" name = "" placeholder = "Enter Password Again">
        <input type="submit" name = "" value = "Register">
        <a href="login.php">Already have an acount? Login HERE.</a>
    </form>
  </div>    
</main>

  <?php
    outputFooter("Info & Rules");
  ?> 

</body>
</html>