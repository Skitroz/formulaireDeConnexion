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
    } catch (PDOException $e) {
        echo "La connexion a echoué:" . $e->getMessage();
    }

    if(isset($_POST['envoyer'])){
        $utilisateur = $_POST['utilisateur'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $mdp = $_POST['mdp'];

        $sql = ("INSERT INTO `login`(`utilisateur`, `prenom`, `nom`, `mdp`) VALUES (:utilisateur, :prenom, :nom, :mdp)");
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':mdp', $mdp);
        $stmt->bindParam(':utilisateur', $utilisateur);

        $stmt->execute();
    }
?>