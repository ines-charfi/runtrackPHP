<?php
    if (isset($_POST)) {
        $text = $_POST[''];
        $transformation = $_POST[''];

        if ($transformation == 'gras') {
            $text = strtoupper($text); 
        } elseif ($transformation == 'cesar') {
            $text = str_rot13($text); 
        } elseif ($transformation == 'plateforme') {
            $text = str_replace("me", "me_", $text);
        }

        echo "votre texte est : ".$text;
    }
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css" />
    <title>Transformation de Texte</title>
</head>
<body>
    <h1>Transformation de Texte</h1>

    <form method="POST">
        <input type="text" name="inputText" required>
        <select name="transformation">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <button type="submit">Valider</button>
    </form>

  

</body>
</html>
