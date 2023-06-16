<?php

// Configuration de la connexion à la bdd
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nws";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "La connexion a la bdd est réussi";
        $utilisateur = $_POST['utilisateur'];
        $mdp = $_POST['mdp'];
    
        $stmt = $conn->prepare("SELECT * FROM login WHERE utilisateur = :utilisateur AND mdp = :mdp");
        $stmt->bindParam(':utilisateur', $utilisateur);
        $stmt->bindParam(':mdp', $mdp);
        $stmt->execute();
    
        if ($stmt->rowCount() == 0) {
            echo "Identifiants incorrects. Veuillez vérifier votre nom d'utilisateur et votre mot de passe.";
        } else {
            echo 'Bienvenue ' . $utilisateur;
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
?>