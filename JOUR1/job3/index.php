<?php

$mybool = true;                   
$myint = 83;                      
$mystr = "Bonjour LaPlateforme!"; 
$myfloat = 10.26;                
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des plusieurs Variables</title>
</head>
<body>
    <h2>Tableau des Variables</h2>
    <table border="2">
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>booléen</td>
            <td>$mybool</td>
            <td><?php echo $mybool ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>entier</td>
            <td>$myint</td>
            <td><?php echo $myint; ?></td>
        </tr>
        <tr>
            <td>chaîne de caractères</td>
            <td>$mystr</td>
            <td><?php echo $mystr; ?></td>
        </tr>
        <tr>
            <td>nombre à virgule flottante</td>
            <td>$myfloat</td>
            <td><?php echo $myfloat; ?></td>
        </tr>
    </table>
</body>
</html>
