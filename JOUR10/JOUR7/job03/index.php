<?php
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['prenom']) && !empty($_POST['prenom'])) 

{
    $_SESSION['prenoms'][] = $_POST['prenom'];

     
         foreach ($_SESSION['prenoms'] as $prenom)
          { 
           echo "<b>Prénom ajouté : </b>".$prenom ."<br>";
          }
   
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Formulaire avec Session</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
        <button type="submit">Ajouter</button>
    </form>

    

    <form method="POST">
        <button type="submit" name="reset">RESET</button>
    </form>
</body>
</html>
