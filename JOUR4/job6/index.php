<?php

if (isset($_GET['nombre'])) {
 
    $nombre = $_GET['nombre'];

  
    if (is_numeric($nombre)) {
        if ($nombre % 2 == 0) {
            echo "Nombre pair<br>";
        } else {
            echo "Nombre impair<br>";
        }
    } else {
        echo "Veuillez entrer un nombre valide.<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>Formulaire de Vérification</title>
</head>
<body>
      
    <form action="" method="GET">
            <h1>Formulaire de Vérification</h1>
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Valider">
    </form>
</body>
</html>
