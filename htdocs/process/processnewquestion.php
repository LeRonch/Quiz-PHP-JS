<?php

require_once(__DIR__."/connexionBdd.php");

if ((empty($_POST["question"])) || (empty($_POST["option1"]))    || (empty($_POST["option2"])) || (empty($_POST["option3"])) || (empty($_POST["option4"])) || (empty($_POST["bonneReponse"]))) 
{ 
    die("Veuillez remplir tous les champs.");
}

    $req = $pdo->prepare('INSERT INTO questions(question, option1, option2, option3, option4, bonneReponse) VALUES(:question, :option1, :option2, :option3, :option4, :bonneReponse)');
    $req->execute(array(
        'question' => $_POST["question"],
        'option1' => $_POST["option1"],
        'option2' => $_POST["option2"],
        'option3' => $_POST["option3"],
        'option4' => $_POST["option4"],
        'bonneReponse' => $_POST["bonneReponse"]
    ));

header('Location: /../quiz/newquestion.php?id='.$_GET['id']);