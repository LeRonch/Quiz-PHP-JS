<?php

    require(__DIR__ . '/connexionBdd.php');


    if ($_POST['user_id']) {
        $user_id = $_POST['user_id'];
        $question_id = $_POST['question_id'];
    }

    $getUserStatement = $pdo->prepare(
        'SELECT * 
        FROM users 
        WHERE id = ?'
    );

    $getUserStatement->execute([
        $user_id
    ]);
    
    $user = $getUserStatement->fetch(PDO::FETCH_ASSOC);

    $user['id_questions'].'/'.$question_id;


    $req = $pdo->prepare(
        'UPDATE users
        SET id_questions = ?
        WHERE id = ?'
    );

    $req->execute(array(
            $user['id_questions'].'/'.$question_id,
            $user_id
        ));