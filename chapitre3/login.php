<?php
session_start(); 

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['nom']);

    if (!empty($nom)) {
        $_SESSION['utilisateur'] = $nom;
        header('Location: profil.php');   
        exit;
    } else {
        $message = "Veuillez entrer votre nom."; 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Connexion</h2>

<form method="POST" action="">
    <label>Nom :</label>
    <input type="text" name="nom">
    <button type="submit">Se connecter</button>
</form>

<?php
if (!empty($message)) {
    echo "<p style='color:red;'>$message</p>";
}
?>

</body>
</html>
