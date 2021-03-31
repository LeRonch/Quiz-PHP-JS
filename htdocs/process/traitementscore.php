<?php

require_once(__DIR__."/connexionBdd.php");


    $req = $pdo->prepare(
        'INSERT INTO score(id_pseudo, score) 
        VALUES(:id_pseudo, :score)'
    );

    $req->execute(array(
            'id_pseudo' => $_GET["id"],
            'score' => $_POST["score"]
    ));
    
    $clearRow = $pdo->prepare(
        'UPDATE users
        SET id_questions = ""');
    
    $clearRow -> execute();

header('Location: /../quiz/yourScore.php?id='.$_GET['id']);