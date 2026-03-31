<?php

require_once 'db.php';
$bdd = getPDO();

if (isset($_POST['login'])) {
    if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);

        $checkUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND mdp = ?');
        $checkUser->execute(array($email, $mdp));

        if ($checkUser->rowCount() > 0) {
            $user = $checkUser->fetch();
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['email'] = $user['email'];

            echo "<script>alert('Connexion réussie !'); window.location.href='api/index.php';</script>";
        } else {
            echo "<script>alert('Email ou mot de passe incorrect.');</script>";
        }
    } else {
        echo "<script>alert('Veuillez remplir tous les champs.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion </title>
    <style>
        body {
            font-family: sans-serif;
            background: #f0f0f0;
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
            background-color: #28a745;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <form method="POST" action="api/login.php">
        <h2>Connexion</h2>
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="mdp" placeholder="Mot de passe">
        <button type="submit" name="login">Se connecter</button>
        <p><a href="register.php">Pas encore inscrit ?</a></p>
    </form>
</body>
</html>
