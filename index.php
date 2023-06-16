<?php
session_start();
    // En-tête du site
    $titrePage = "Inscription";
    // Main du site
    $titreInscription = "Inscription";
    $nomUtilisateur = "Non d'utilisateur :";
    $firstName = "Prénom :";
    $lastName = "Nom :";
    $mdp = "Mot de passe :";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titrePage ?></title>
    <link rel="stylesheet" href="styles.css">
    <script src="index.js"></script>
</head>
<body>
    <form action="inscription.php" method="post" id="form">
        <h1 id="title"><?php echo $titreInscription ?></h1>
        <div class="bloc">
            <label for="utilisateur" class="sousTitre"><?php echo $nomUtilisateur ?></label>
            <input type="text" name="utilisateur" placeholder="Skitroz" id="nutilisateur" required>
        </div>
        <div class="bloc">
            <label for="firstname" class="sousTitre"><?php echo $firstName ?></label>
            <input type="text" name="prenom" placeholder="Patrick" id="fname" required>
        </div>
        <div class="bloc">
            <label for="lastname" class="sousTitre"><?php echo $lastName ?></label>
            <input type="text" name="nom" placeholder="Dupont" id="lname" required>
        </div>
        <div class="bloc">
            <label for="mdp" class="sousTitre"><?php echo $mdp ?></label>
            <input type="password" name="mdp" placeholder="Kevindu76!" id="mmdp" required>
        </div>
        <div id="submit">
        <input type="submit" value="S'inscrire" name="envoyer" id="ssubmit">
        <p>ou</p>
        </div>
    </form>
    <div id="connexion">
    <a href="inscription.php"><button>Se connecter</button></a>
</div>
</body>
</html>