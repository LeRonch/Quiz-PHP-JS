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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----- ***** CSS LINK ******------>
    <link rel="stylesheet" href="/main.css">
    <!----- ***** URL ICON LINK ******------>
    <link rel="icon" href="/img/logo2.png" />
    <title>New Question</title>

    <!-- NAV BAR -->
    <div class="navbar sticky-top">
        <img src="/img/logo2.png" width="50vw">
        <div class="navbar__brand">QUIZ TIME !</div>
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


    <h1>Creer un quiz</h1>

    <div class="container logincontainer">
        <div class="row">
            <div id="form">

                <form action="/process/processnewquestion.php?id=<?= $_GET['id'];?>" method="POST">

                <h2>Créez un nouveau Quiz !</h2>
                        
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="question">* Question : </label>
                            <div class="rightTab">
                            <textarea type="textarea" class="input-field" name="question" id="question" required></textarea><br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="option1">* Reponse 1 : </label>
                            <div class="rightTab">
                            <input type="text" name="option1" id="option1" class="input-field required"><br>
                            </div>
                        </div>
                    </div>
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="option2">* Reponse 2 : </label>
                            <div class="rightTab">
                            <input type="text" name="option2" id="option2" class="input-field" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="option3">* Reponse 3 : </label>
                            <div class="rightTab">
                            <input type="text" name="option3" id="option3" class="input-field" required>
                            </div>
                        </div>
                    </div>
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="option4">* Reponse 4 : </label>
                            <div class="rightTab">
                            <input type="text" name="option4" id="option4" class="input-field" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="bonneReponse">* Bonne Réponse : </label>
                            <div class="rightTab">
                            <input type="text" name="bonneReponse" id="bonneReponse" class="input-field" required><br>
                            </div>
                        </div>
                    </div>

                    <input type="submit" name="createbtn" id='submit' value='CREER'>

                </form>
            </div>
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