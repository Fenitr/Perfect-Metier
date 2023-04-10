<?php
// Connexion à la base de données
$bdd = mysqli_connect("localhost", "root", "", "pefect_metier");

// Vérification des identifiants
if(isset($_POST['uname']) && isset($_POST['mdp'])) {
	$username = mysqli_real_escape_string($bdd, $_POST['uname']);
	$password = mysqli_real_escape_string($bdd, $_POST['mdp']);

	$query = "SELECT * FROM user WHERE nom = '$username' AND mot_de_passe = '$password'";
	$result = mysqli_query($bdd, $query);

	if(mysqli_num_rows($result) == 1) {
		// L'utilisateur a été trouvé, donc la connexion est autorisée
		session_start();
		$_SESSION['username'] = $username;
		header('Location: acceuil.php');
	} else {
		// L'utilisateur n'a pas été trouvé, donc la connexion est refusée
		echo "Nom d'utilisateur ou mot de passe incorrect.";
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
    <center><img src="image/logoPerfect.png" style="width: 200px;height: 100px;margin-top:1%" alt="logo"></center><br>
    <div class="container-formulaire">
        <form action="" method="post">
        <center>
            <div class="container-title">Connexion</div><br><br>
        </center>
        <label for="nomUser" class="intro">Nom d'utilisateur</label><br>
        <div class="container-input"><img src="icon/user-regular-24.png" alt="clé"><input type="text" placeholder="Entrer votre nom" name="uname" à id="input"></div><br><br>
        <label for="nomPassword" class="intro">Mot de passe</label><br>
        <div class="container-input"><img src="icon/key-solid-24.png" alt="clé"><input type="password" placeholder="Entrer votre mot de passe" name="mdp" required id="input"></div><br><br>
        <input type="submit" class="submit" name="connexion" value="Se connecter" style="width:200px;margin-left:20%"><br><br>
        <a href="signin.php" style="width:200px;margin-left:35%">créer un compte</a>
       </form>
   </div>
</body>
</html>