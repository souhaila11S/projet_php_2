<?php
session_start();


if (!isset($_SESSION['user'])) {
    header('Location: login.php'); 
    exit;
}
?>

<h1>Bienvenue <?= htmlspecialchars($_SESSION['user']) ?> !</h1>
<p><a href="logout.php">Se déconnecter</a></p>
