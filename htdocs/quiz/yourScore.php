<?php

require_once(__DIR__."/../process/connexionBdd.php");

?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----- ***** CHART.JS SCRIPT ******------>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!----- ***** BOOTSTRAP LINKS ******------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!----- ***** CSS LINK ******------>
    <link rel="stylesheet" href="/main.css">

    <title>Votre Score</title>

    <!----- ***** BOOTSTRAP LINKS ******------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!----- ***** GOOGLE FONTS LINKS ******------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----- ***** CSS LINK ******------>
    <link rel="stylesheet" href="/main.css">
    <!----- ***** URL ICON LINK ******------>
    <link rel="icon" href="/img/logo2.png" />

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
    <!-- VOTRE SCORE NEON -->
    <div class="container1">
        <div class="votre1">Votre</div>
        <div class="score1">Score</div><br><br>
        <!-- SCORE PLAYER -->
        <?php

            $reponse = $pdo->query(

            'SELECT *
            FROM score
            ORDER BY id DESC
            LIMIT 1');

            $score = $reponse->fetch();

        ?>
        <div class="resultat1"><?= $score['score']; ?></div>
    </div>
        

    <!-- SCORE GRAPHIQUE -->
    <div style="width: 50%">
        <canvas id="myChart"></canvas>
    </div>

        <?php
   
    $stmt = $pdo->prepare("SELECT * FROM score WHERE id_pseudo = ?");
    $stmt->execute([$_GET['id']]);

    $scores = [];
    $idPartie = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $scores[] = (int)$score;
        $idPartie[] = (int)$id;
    }

    ?>

    <script>

        let ctx = document.getElementById('myChart').getContext('2d');

        let chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: <?php echo json_encode($idPartie);?>,
                datasets: [{
                    label: 'My Score',
                    backgroundColor: 'rgb(173, 193, 223)',
                    borderColor: 'rgb(7, 46, 105)',
    
                    data: <?php echo json_encode($scores);?>
                }]
            },

            // Configuration options go here
            options: {

                horizontalAlign: "center",
                
                animation: {
                onProgress(animation) {
                    console.log(animation.animationObject.currentStep / animation.animationObject.numSteps);
                }
                },
                scales: {
                yAxes: [{
                    ticks: {
                    beginAtZero: true
                    }
                }]
                }
            }
            });

    </script>
      
    
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