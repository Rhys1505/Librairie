<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&R Librairie</title>
    <link rel="stylesheet" href="style-login.css">    
    <link rel="icon" type="image/png" href="Image/logo-onglet-removebg-preview.png">
</head>
<body>

<?php
$error_msg = ""; // Initialisation de la variable

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "erreur : " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifiant = $_POST['identifiant'];
    $mdp = $_POST['mdp'];
    if ($identifiant != "" && $mdp != "") {
        $req = $bdd->query("SELECT * FROM users WHERE identifiant = '$identifiant' AND mdp = '$mdp' ");
        $rep = $req->fetch();
        if ($rep['id'] != false) {
            header("Location: rechercher.php");        
        } else {
            $error_msg = "Identifiant ou mot de passe incorrect !";
        }
    }
}
?>

<div id="header">
    <div class="container">
        <nav>
            <img src="Image/logoo.png" class="Logo">
            <ul>
                <li><a href="rechercher.php">Rechercher</a></li>
                <li><a href="signin.php">S'enregistrer</a></li>
                <li><a href="favoris.php">Mes favoris</a></li>
            </ul>
        </nav>
        <div class="formulaire">
            <div class="bouttons-box">
                <div id="bouttons"></div>
                <button type="button" class="switch-bouttons">Connectez-vous</button>
            </div>
            <div>
                <form method="POST" action="" id="connecter" class="input-groupe">
                    <input type="text" id="identifiant" class="input" name="identifiant" placeholder="Identifiant" required>
                    <input type="password" id="mdp" class="input" name="mdp" placeholder="Mot de passe" required>
                    <button type="submit" value="Se connecter" class="submit" name="ok">Se connecter</button>
                </form>
            </div>
        </div>
        <div>
            <?php
            // Vérifie si $error_msg est définie avant de l'afficher
            if (isset($error_msg) && !empty($error_msg)) {
                echo "<p>$error_msg</p>";
            }
            ?>
        </div>
    </div>
</div>
        
    
</body>
</html>

