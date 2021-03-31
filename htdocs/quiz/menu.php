<?php

require_once(__DIR__."/../process/connexionBdd.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----- ***** BOOTSTRAP LINKS ******------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!----- ***** GOOGLE FONTS LINKS ******------>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <!----- ***** URL ICON LINK ******------>
    <link rel="icon" href="/img/logo2.png" />
    <!----- ***** CSS LINK ******------>
    <link rel="stylesheet" href="/main.css">
    <title>Menu</title>

    <!-- NAV BAR -->
    <div class="navbar sticky-top">
        <img src="/img/logo2.png" width="50vw">
        <div class="navbar__brand">IT'S QUIZ TIME!</div>
        <div class="navbar__menu">
            <a class="navbar__item" href="menu.php?id=<?=$_GET['id'];?>">Home ❓<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="Home ❓"></span></a>
            <a class="navbar__item" href="/index.php">Login 👀<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="Login 👀"></span></a>
            <a class="navbar__item" href="quiz.php?id=<?=$_GET['id'];?>">Play 🕹<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="Play 🕹"></span></a>
            <a class="navbar__item" href="score.php?id=<?=$_GET['id'];?>">LeaderBoard 🏆<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="LeaderBoard 🏆"></span></a>
            <a class="navbar__item navbar__item__icon" href="javascript:void(0);" onclick="navResponsive()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
</head>

<body>
    
    <!--SECTION 1 HEADER-->
        <h1>QUIZ TIME</h1>

    <!--SECTION 2 PLAY -->
    <div class="container" id="play">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-6 align-self-center">

            <a href="quiz.php?id=<?=$_GET['id'];?>" class="glowButton" role="button">Play !</a>

            </div>
            <div class="col"></div>
            </div>
    </div>

    <!--SECTION 3 LEADERBOARD -->
    <div class="container" id="leaderBoard">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-6 align-self-center">
                <a href="score.php?id=<?=$_GET['id'];?>" class="glowButton" role="button">leaderBoard !</a>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <!--SECTION 3 NEW Q -->
    <div class="container" id="newQuiz">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-6 align-self-center">
                <a href="newquestion.php?id=<?=$_GET['id'];?>" class="glowButton" role="button">New Quiz!</a>
            </div>
            <div class="col"></div>
        </div>
    </div>


    <!----- ***** FOOTER ******------>
    <footer class="footer">
    <img src="/img/logo2.png" width="80vw">
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!----- ***** BOOTSTRAP SCRIPTS ******------>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!----- ***** JS SCRIPTS ******------>
    <script src="/JS/timer.js"></script>
    <script src="/JS/main.js"></script>
    <script src="/JS/navbar.js"></script>
    <script src="/JS/neon.js"></script>
</body>
</html>