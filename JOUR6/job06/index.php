<?php
// Définir le style par défaut (style1) si aucun style n'est sélectionné
$style = isset($_POST['style']) ? $_POST['style'] : 'style1';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Style</title>
    <!-- Inclure la feuille de style en fonction de la sélection -->
    <link rel="stylesheet" type="text/css" href="<?php echo $style; ?>.css">
</head>
<body>
    <form method="POST">
        <label for="style">Choisissez un style:</label>
        <select name="style" id="style">
            <option value="style1" <?php if ($style == 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if ($style == 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if ($style == 'style3') echo 'selected'; ?>>Style 3</option>
        </select>
        <button type="submit">Valider</button>
    </form>
</body>
</html>
