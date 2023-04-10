<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect Métier Test</title>
    <link rel="shortcut icon" href="icon/logo-pm.ico">
    <link rel="stylesheet" href="style/nav-bar.css">
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="style/style-test.css">
    <link rel="stylesheet" href="style/checkbox-style.css">
</head>
<body>
    <header>
        <nav>
            <img src="image/logo-pm.png" alt="logo perfect métier">
            <ul>
                <li><a href="Acceuil.html">Accueil</a></li>
                <li><a href="#">Notre équipe</a></li>
                <li><a href="#">A propos</a></li>
            </ul>
            <a href="#">
                <button>
                    Se connecter
                </button>
            </a>
        </nav>
    </header>
    <div class="contain_all">
        <div class="en_tête">
            <h1>RESULTAT</h1>
        </div>
        <div>
         <?php
            $result = [
                'investigateur' => 0,
                'artiste' => 0,
                'conventionnel' => 0,
                'entreprenant' => 0,
                'realiste' => 0,
                'social' => 0,
            ]; 
            
            /* social */
            
            $result['social'] += intval($_GET['sample-01']);
            $result['social'] += intval($_GET['sample-05']);
            $result['social'] += intval($_GET['sample-15']);
            $result['social'] += intval($_GET['sample-22']);
            
            /* entreprenenant */
            $result['entreprenant'] += intval($_GET['sample-02']);
            $result['entreprenant'] += intval($_GET['sample-08']);
            $result['entreprenant'] += intval($_GET['sample-20']);
            $result['entreprenant'] += intval($_GET['sample-23']);
            
            /* artiste */
            $result['artiste'] += intval($_GET['sample-03']);
            $result['artiste'] += intval($_GET['sample-24']);
            $result['artiste'] += intval($_GET['sample-14']);
            $result['artiste'] += intval($_GET['sample-19']);

            /* realiste */
            $result['realiste'] += intval($_GET['sample-04']);
            $result['realiste'] += intval($_GET['sample-09']);
            $result['realiste'] += intval($_GET['sample-12']);
            $result['realiste'] += intval($_GET['sample-17']);
            
            /* investigateur */
            $result['investigateur'] += intval($_GET['sample-06']);
            $result['investigateur'] += intval($_GET['sample-11']);
            $result['investigateur'] += intval($_GET['sample-16']);
            $result['investigateur'] += intval($_GET['sample-18']);
            
            /* convetionnel */
            $result['conventionnel'] += intval($_GET['sample-07']);
            $result['conventionnel'] += intval($_GET['sample-10']);
            $result['conventionnel'] += intval($_GET['sample-13']);
            $result['conventionnel'] += intval($_GET['sample-21']);

            $result = array_search(max($result), $result);
         ?>
        </div>
    </div>
    <center>
    <?php
        echo 'Vous êtes '.$result.' d\'après votre réponse.';
    ?>
    </center>
</body>
</html>