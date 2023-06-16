<?php
    // En-tête du site
    $titrePage = "Formulaire";
    // Main du site
    $titreInscription = "Formulaire d'inscription";
    $titreConnexion = "Formulaire de connexion";
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
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="inscription.php" method="post" id="form">
        <h1 id="title"><?php echo $titreInscription ?></h1>
        <div id="utilisateur">
            <label for="utilisateur"><?php echo $nomUtilisateur ?></label>
            <input type="text" name="utilisateur" placeholder="Skitroz" id="nutilisateur" required>
        </div>
        <div id="firstname">
            <label for="firstname"><?php echo $firstName ?></label>
            <input type="text" name="prenom" placeholder="Patrick" id="fname" required>
        </div>
        <div id="lastname">
            <label for="lastname"><?php echo $lastName ?></label>
            <input type="text" name="nom" placeholder="Dupont" id="lname" required>
        </div>
        <div id="mdp">
            <label for="mdp"><?php echo $mdp ?></label>
            <input type="password" name="mdp" placeholder="Kevindu76!" id="mmdp" required>
        </div>
        <div id="submit">
        <input type="submit" value="Envoyer" name="envoyer" id="ssubmit">
        </div>
    </form>

    <form action="connexion.php" method="post" id="formConnexion">
        <h1><?php echo $titreConnexion?></h1>
        <div>
            <label for="utilisateur"><?php echo $nomUtilisateur?></label>
            <input type="text" name="utilisateur" placeholder="Skitroz" required>
        </div>
        <div>
            <label for="mdp"><?php echo $mdp ?></label>
            <input type="password" name="mdp" placeholder="Kevindu76!" required>
        </div>
        <div>
            <input type="submit" value="Envoyer" name="envoyer">
        </div>
    </form>
</body>
</html>