<?php
session_start();
if(!isset($_SESSION['username'])) {
	header('Location: login.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect Métier</title>
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="icon/logo-pm.ico">
    <link rel="stylesheet" href="style/Font-accueil.css">
</head>
<body>
    <?php
        require 'navbar.php';
    ?>
    <div class="container">
        <div class="search-bar-container">
            <div class="search-bar">
                <input type="text" placeholder="Rechercher...">
            <button type="submit">
                <img src="icon/search-icon.svg">
            </button>
            </div>
            
        </div>
        <div class="conntainer-inside">
            <div class="containter-information">
                <div class="vertical-line">
                    
                </div>
                <div class="conterner-info-left">
                    <h1>Perfect</h1>
                    <h2>METIER</h2>
                    <h3>NOTRE OBJECTIF:</h3>
                    <p class="descri">
                        Vous offrir une expérience personnalisée 
                        et pertinente pour 
                        déterminer la carrière la mieux 
                        adaptée à votre personnalité et à vos aspirations professionnelles.
                    </p>
                    <button class="commencer">
                        Commencer le test
                        <img src="icon/right-arrow.png" alt="">
                    </button>
                </div>
                <div class="conterner-info-right">
                    <div class="card">
                       <p class="card-texte">
                            LES DIFFÉRENTES PÔLE DE COMPÉTENCE
                       </p>
                    </div>
                </div>  
            </div>
        </div>
        
    </div>
    
  
</body>
</html>