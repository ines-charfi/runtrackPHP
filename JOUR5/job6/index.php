<?php
function convertToLeetSpeak($text) {
    // Remplacements les plus basiques du leet speak
    $text = str_ireplace(['a', 'b', 'd', 'J', 'm', 'E'], ['2', '5', '7', '1', '9', '3'], $text);
    return $text;
}

// Exemple d'utilisation
$inputText = "Bonjour le monde";
$leetText = convertToLeetSpeak($inputText);
echo "<b>Votre texte est :</b>".$leetText;
?>
