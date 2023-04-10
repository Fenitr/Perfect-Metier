<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nom = $_POST['nom'];
        $motdepasse = $_POST['motdepasse'];
        
        // Vérification des champs obligatoires
        if(empty($nom) || empty($motdepasse)) {
            echo "Veuillez remplir tous les champs obligatoires.";
        } else {
            // Connexion à la base de données
            $mysqli = new mysqli("localhost", "root", "", "pefect_metier");
            
            // Vérification si le nom existe déjà
            $requete = $mysqli->prepare("SELECT COUNT(*) FROM user WHERE nom = ?");
            $requete->bind_param('s', $nom);
            $requete->execute();
            $resultat = $requete->get_result();
            $count = $resultat->fetch_array()[0];
            
            if($count > 0) {
                echo "Le nom que vous avez entré est déjà utilisé.";
            } else {
                // Insertion de l'utilisateur dans la base de données
                $requete = $mysqli->prepare("INSERT INTO user (nom, mot_de_passe) VALUES (?, ?)");
                $motdepasse = htmlentities($motdepasse);
                $requete->bind_param('ss', $nom, $motdepasse);
                $requete->execute();
                header('Location: login.php');
            }
            $mysqli->close();
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="icon/logo-pm.ico">
    <link rel="stylesheet" href="style/Font-accueil.css">
    <link rel="stylesheet" href="style/signin.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
    <center><img src="image/logoPerfect.png" style='width: 250px;height:170px;margin-top:-2%' alt="logo"></center><br>
    <div class="container-formulaire">
        <form action="signin.php" method="post">
        <center>
            <div class="container-title">Inscription</div><br><br>
        </center>
        <label for="nomUser" class="intro">Nom d'utilisateur</label><br>
        <div class="container-input"><img src="icon/user-regular-24.png" alt="clé"><input type="text" placeholder="Entrer votre nom" name="nom" required id="input"></div><br><br>
        <label for="nomPassword" class="intro">Choisir un mot de passe</label><br>
        <div class="container-input"><img src="icon/key-solid-24.png" alt="clé"><input type="password" placeholder="Entrer votre mot de passe" name="motdepasse" required id="input"></div><br><br>
        <button type="submit" class="submit">Inscription</button>
       </form>
   </div>
</body>
</html>