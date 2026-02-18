<?php
$erreurs = [];
$nom = $email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = trim($_POST["nom"]);
    $email = trim($_POST["email"]);

    if (empty($nom)) {
        $erreurs[] = "Le nom est obligatoire.";
    }

    if (empty($email)) {
        $erreurs[] = "L'email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "L'email n'est pas valide.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Validation Formulaire</title>
</head>
<body>

<h2>Formulaire avec validation</h2>

<?php
if (!empty($erreurs)) {
    echo "<ul style='color:red;'>";
    foreach ($erreurs as $err) {
        echo "<li>$err</li>";
    }
    echo "</ul>";
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($erreurs)) {
    echo "<p style='color:green;'>Formulaire envoyé avec succès !</p>";
}
?>

<form method="POST" action="">
    <label>Nom :</label>
    <input type="text" name="nom" value="<?= htmlspecialchars($nom) ?>"><br><br>

    <label>Email :</label>
    <input type="text" name="email" value="<?= htmlspecialchars($email) ?>"><br><br>

    <button type="submit">Envoyer</button>
</form>

</body>
</html>
