<?php
if (!isset($_COOKIE['nbrevisites'])) {
    setcookie('nbrevisites', 1, time() + 3600);
    $_COOKIE['nbrevisites'] = 0;
} else {
    $_COOKIE['nbrevisites'] ++;
    
    setcookie('nbrevisites',$_COOKIE['nbrevisites'], time() + 3600);
    
}
    echo "<b>le nombre de visites est :</b>".$_COOKIE['nbrevisites']."<br>";

if (isset($_POST['reset'])) {
    setcookie('nbrevisites', 0, time() - 3600); 
    $_COOKIE['nbrevisites'] = 0;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites avec Cookie</title>
</head>
<body>
   
    <form method="POST">
        <button type="submit" name="reset">RESET</button>
    </form>
</body>
</html>
