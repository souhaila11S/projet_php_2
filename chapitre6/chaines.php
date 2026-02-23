<?php

echo "<h2>Test des chaînes</h2>";

$phrase = "Hello PHP";

echo "Longueur : " . strlen($phrase) . "<br>";
echo "Majuscules : " . strtoupper($phrase) . "<br>";
echo "Minuscules : " . strtolower($phrase) . "<br>";

echo "<hr>";

echo "Position de PHP : " . strpos($phrase, "PHP") . "<br>";

$nouvellePhrase = str_replace("PHP", "le monde", $phrase);
echo "Remplacé : " . $nouvellePhrase . "<br>";

echo "<hr>";

$liste = "HTML,CSS,JavaScript,PHP";
$techs = explode(",", $liste);

echo "Technologies : " . implode(" | ", $techs) . "<br>";

echo "<hr>";

$texte = "   Bonjour   ";
echo "Texte nettoyé : '" . trim($texte) . "'";

?>