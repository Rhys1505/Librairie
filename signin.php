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

    <div id="header">
        <div class="container">
            <nav>
                <img src="Image/logoo.png" class="Logo">

                <ul>
                    <li><a href="rechercher.php">Rechercher</a></li>
                    <li><a href="login.php">Se connecter</a></li>
                    <li><a href="favoris.php">Mes favoris</a></li>
                </ul>

            </nav>
    
                <div class="formulaire">
                    <div class="bouttons-box">
                        <div id="bouttons"></div>                       

                        <button type="button" class="switch-bouttons">Créez votre compte</button>

                    </div>
                    <div>

                    <form method="POST" action="traitement.php" id= "s'enregistrer" class="input-groupe">
                            <input type="text" id="identifiant" class="input" name="identifiant" placeholder="Identifiant" required>
                            <input type="text" id="email" class="input" name="email" placeholder="Email" required>
                            <input type="password" id="mdp" class="input" name="mdp" placeholder="Mot de passe" required>
                            <button type="submit" value="s'enregistrer" class="submit" name="ok">S'enregistrer</button>

                    </form>
                    </div>

                </div>

            <div>
           
                
        </div>

        
    
</body>
</html>