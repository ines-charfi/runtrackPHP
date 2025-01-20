<?php

$largeur = 0;
$hauteur = 0;


 
 if (isset($_POST[""])) {
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];
     echo $largeur; 
     echo $hauteur; 
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>Formulaire Maison</title>
   
</head>
<body>

  
    <form action="" method="POST">
        <h3> Dessiner une maison</h3>
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur"  required><br>
        
        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" value="<?php echo $hauteur; ?>" required><br>
        
        <input type="submit" value="Dessiner la maison">
    </form>


</body>
</html>
