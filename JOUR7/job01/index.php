<?php
session_start();

if (!isset($_SESSION['nbrevisites']))
 {
    $_SESSION['nbrevisites'] = 0;
}

    $_SESSION['nbrevisites']++;
    
      echo"le nombre de visites est :".$_SESSION['nbrevisites']."<br>";

if (isset($_POST['reset'])) 
{
    $_SESSION['nbrevisites'] = 0;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><b>Compteur-de-Visites</b></title>
 
</head>
<body>
   
    <form method="POST">
        <button type="submit" name="reset">reset</button>
    </form>
</body>
</html>
