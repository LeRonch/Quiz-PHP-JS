<?php

require_once(__DIR__."/process/connexionBdd.php");

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----- ***** CSS LINK ******------>
    <link rel="stylesheet" href="/main.css">
    <!----- ***** URL ICON LINK ******------>
    <link rel="icon" href="/img/logo2.png" />

    <title>Login</title>

    <!-- NAV BAR -->
    <div class="navbar sticky-top">
        <img src="/img/logo2.png" width="50vw">
        <div class="navbar__brand">QUIZ TIME !</div>
        <div class="navbar__menu">
            <a class="navbar__item" href="/quiz/menu.php">Home ❓<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="Home ❓"></span></a>
            <a class="navbar__item" href="/index.php">Login 👀<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="Login 👀"></span></a>
            <a class="navbar__item" href="/quiz/quiz.php">Play 🕹<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="Play 🕹"></span></a>
            <a class="navbar__item" href="/quiz/score.php">LeaderBoard 🏆<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="LeaderBoard 🏆"></span></a>
            <a class="navbar__item navbar__item__icon" href="javascript:void(0);" onclick="navResponsive()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
</head>

<?php

    if (isset($_GET['message'])){
    echo '<div style="padding: 17px; width: 35vw; margin-left: 30vw; background-color: rgb(189, 190, 255); border-radius: 20px; text-align: center; color: white;">'.$_GET['message'].'</div>'; }

?>

<section>

    <!-----*** LOGIN ***----->
    <div class="container logincontainer">
        <div class="row">
            <div id="form">
                <form action="process/process.php" method="POST" class="login">
                    <h2>Entrez un pseudo pour créer ou vous connecter</h2>
                        
                     <div class="rowTab"> 
                        <div class="labels">
                            <label><b>* Pseudo</b></label>
                            <div class="rightTab">
                                <input type="text" class="input-field" name="pseudo" placeholder="Pseudo" required>
                            </div>
                        </div>
                    </div>
            
                        <input type="submit" name="loginbtn" id='submit' value='LOGIN'>

                </form>
            </div>
        </div>
    </div>

</section>

<!----- ***** FOOTER ******------>
<footer class="footer">
    <img src="/img/logo2.png" width="80vw">
    </footer>

</body>
</html>