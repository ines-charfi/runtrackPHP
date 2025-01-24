<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $result = $conn->query("SELECT etage.nom as nom_etage, salles.nom as nom_salle FROM etage JOIN salles WHERE salles.id_etage = etage.id;");
    $etudiants = $result->fetch_all(MYSQLI_ASSOC);
    var_dump($etudiants);

    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      

        <table>
            <thead>
            <tr>
                    <th>Nom</th>
                    <th>Nom-etage</th>
                   
                   
                </tr>
            </thead>
            <tbody>
                <?php
                    // var_dump($etudiants);

                    foreach ($etudiants as $etudiant => $champs)
                    {
                        // var_dump($champs);
                        echo("
                        <tr>
                           
                            <td>" . $champs['nom_salle'] . "</td>
                            <td>" . $champs['nom_etage'] . "</td>
                          
                        </tr>");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>

 