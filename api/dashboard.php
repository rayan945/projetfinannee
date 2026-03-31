<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
</head>
<body>
    <h1>Bienvenue, <?php echo $_SESSION['nom']; ?> 👋</h1>
    <p>Tu es bien connecté !</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
