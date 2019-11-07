<?php
    function outputNavigation($pageName){

        echo '<header>';
        echo '<div class="logoContainer">';
        echo '<img src="/logo/logoNav.png" alt="logo" class = "logoNav" height="60" width="230"/>';
        echo '</div>';
        echo '<nav>';
        echo '<ul class="navLinks">';

        $linkNames = array("Game","Information","Leaderboard","Contact","Login",);
        $linkAddresses = array("game.php","index.php","ranking.php","contactADMIN.php","login.php");

        for($x = 0; $x < count($linkNames); $x++){

            echo '<li>' . '<a class="navLink"' .'href="' . $linkAddresses[$x] .'">' . $linkNames[$x] . '</a>' . '</li>';

        }

        echo '</ul>';
        echo '<button class="register"><a class = "navLink" href="register.php">Register</a></button>';
        echo '</nav>';
        echo '</header>';
    }  
    
    function outputFooter($pageName){

        echo '<footer>
        <div class = "foot">
        <p>Game developed by Vicente Manzano, M00666937. 2 Year Bsc Computer Science Student at Middlesex University. 12/2019. </p>
        <p>Programming languages and libraries used: HTML5, CSS3, JS, BOOTSTRAP and PHP</p>
        </div>
        </footer>';
    }
?>