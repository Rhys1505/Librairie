<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-rechercher.css">
    <link rel="icon" type="image/png" href="Image/logo-onglet-removebg-preview.png">
    <title>C&R Librairie</title>
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
    <div class="box">  
     <form class="search">
        <input type="text" class="searchInput" placeholder="Rehercher...">
        <button  type="submit"><img src="Image/loupe.png"></button>
    </form>

    </div>
    <div class="resultsContainer"></div>
<script src="index.js"> defer</script>

</body>
</html>