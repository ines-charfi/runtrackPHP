<?php
$str = "Les choses que l'on Possède finissent par nous posséder.";
echo "Mon proverbe est : $str<br>";

$dic = [
    "voyelle" => ['a', 'e', 'i', 'o', 'u', 'y'],
    "consonne" => [
        'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n',
        'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'
    ]
];

$nbrevoyelle = 0;
$nbreconsonne = 0;

for ($i = 0; $i < strlen($str); $i++) {
    // var_dump($dic['voyelle']);
    // echo($str[$i]);

    for ($indexVoyelle = 0; $indexVoyelle < count($dic['voyelle']); $indexVoyelle++) {
        if ($str[$i] == $dic['voyelle'][$indexVoyelle]) {
            $nbrevoyelle++;
        }
    }

    for ($indexConsonne = 0; $indexConsonne < count($dic['consonne']); $indexConsonne++) {
        if ($str[$i] == $dic['consonne'][$indexConsonne]) {
            $nbreconsonne++;
        }
    }
}



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau voyelles consonnes</title>
</head>
<table  border="2" style=background-color:cyan; text-alignement="center">
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
           <td><?php echo "$nbrevoyelle"?></td>
        <td><?php echo "$nbreconsonne "?></td>
        </tr>
    </tbody>
</table>


</html>