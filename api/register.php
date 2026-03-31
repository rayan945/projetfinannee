<?php
require_once 'db.php';
$bdd = getPDO();

if (isset($_POST['envoi'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);

        $checkEmail = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $checkEmail->execute(array($email));

        if ($checkEmail->rowCount() > 0) {
            echo "<script>alert('❌ Cet email est déjà utilisé !');</script>";
        } else {
            $insertUser = $bdd->prepare('INSERT INTO users(nom, prenom, email, mdp) VALUES(?, ?, ?, ?)');
            if ($insertUser->execute(array($nom, $prenom, $email, $mdp))) {
                echo "<script>alert('✅ Inscription réussie !'); window.location.href='api/login.php';</script>";
            } else {
                echo "<script>alert('❌ Une erreur est survenue.');</script>";
            }
        }
    } else {
        echo "<script>alert('⚠ Veuillez remplir tous les champs.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription </title>
    <style>
        body {
            font-family: sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <form method="POST" action="api/register.php">
        <h2>Inscription</h2>
        <input type="text" name="nom" placeholder="Prénom">
        <input type="text" name="prenom" placeholder="Nom">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="mdp" placeholder="Mot de passe">
        <button type="submit" name="envoi">S'inscrire</button>
        <p><a href="api/login.php">Déjà un compte ? Connecte-toi</a></p>
    </form>
</body>
</html>
