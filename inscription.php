<?php
session_start();
// Configuration de la connexion à la bdd
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nws";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

<?php
    $titreConnexion = "Connexion";
    $nomUtilisateur = "Non d'utilisateur :";
    $titrePage = "Connexion";
    $mdp = "Mot de passe :";
?>
<head>
    <title><?php echo $titrePage;?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<form action="connexion.php" method="post" id="form">
        <h1 id="title"><?php echo $titreConnexion?></h1>
        <div class="bloc"> 
            <label for="utilisateur" class="sousTitre"><?php echo $nomUtilisateur?></label>
            <input type="text" name="utilisateur" placeholder="Skitroz" required>
        </div>
        <div class="bloc">
            <label for="mdp" class="sousTitre"><?php echo $mdp ?></label>
            <input type="password" name="mdp" placeholder="Kevindu76!" required>
        </div>
        <div id="submit">
            <input type="submit" value="Se connecter" name="envoyer">
            <p>ou</p>
        </div>
    </form>
    <div id="connexion">
        <a href="index.php"><button>S'inscrire</button></a>
        </div>