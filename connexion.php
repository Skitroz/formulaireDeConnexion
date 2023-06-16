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
        $utilisateur = $_POST['utilisateur'];
        $mdp = $_POST['mdp'];
    
        $stmt = $conn->prepare("SELECT * FROM login WHERE utilisateur = :utilisateur AND mdp = :mdp");
        $stmt->bindParam(':utilisateur', $utilisateur);
        $stmt->bindParam(':mdp', $mdp);
        $stmt->execute();
    
        if ($stmt->rowCount() == 0) {
            header("location: inscription.php");
            exit();
    }  
}catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
?>

<?php
    $titrePage = "Connexion";
?>

<?php 

if (isset($_POST['deconnexion'])) {

    session_unset();
    session_destroy();

    header("Location: index.php");
    exit();
}

?>

<head>
    <link rel="stylesheet" href="styles.css">
    <title><?php echo $titrePage;?></title>
</head>
<body>
    <h1 id="Bienvenue">Bienvenue <?php echo $utilisateur;?></h1>
    <div id="deconnexion">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="submit" name="deconnexion" value="Se déconnecter">
    </form>
    </div>
</body>
