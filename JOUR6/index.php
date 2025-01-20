<?php

$style = isset($_GET['style']) ? $_GET['style'] : 'style1';  

    if ($style == 'style1') {
        echo '<link rel="stylesheet" href="style1.css">';
    } elseif ($style == 'style2') {
        echo '<link rel="stylesheet" href="style2.css">';
    } elseif ($style == 'style3') {
        echo '<link rel="stylesheet" href="style3.css">';
    }
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Style Dynamique</title>
    
 
    
</head>
<body>
    <h1>Choisissez un Style</h1>
    
  
    <form action="index.php" method="GET">
        <label for="style">Sélectionner un style :</label>
        <select name="style" id="style">
            <option value="style1" <?php if ($style == 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if ($style == 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if ($style == 'style3') echo 'selected'; ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer</button>
    </form>
</body>
</html>



