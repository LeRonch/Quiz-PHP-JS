<?php

require_once(__DIR__."/../process/connexionBdd.php");

    $username = $_POST['pseudo'];
    $stmt = $pdo->prepare(
        "SELECT *
        FROM users 
        WHERE pseudo=?");
    $stmt->execute([$username]); 
    $user = $stmt->fetch();
    if ($user) {
        header('Location: /quiz/menu.php?id='.$user['id']);//
    
    }
    else
    {
    $req = $pdo->prepare(
        'INSERT INTO users(pseudo) 
        VALUES(:pseudo)');

    $req->execute(array(
            'pseudo' => $_POST["pseudo"]
    ));
            
    header('Location: /index.php?message=Votre compte a bien été créé. Veuillez vous connecter.');}