<?php
session_start();

if (!isset($_SESSION['utilisateur'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
</head>
<body>

<h1>Bienvenue <?= htmlspecialchars($_SESSION['utilisateur']) ?> !</h1>

<p><a href="logout.php">Se déconnecter</a></p>

</body>
</html>
