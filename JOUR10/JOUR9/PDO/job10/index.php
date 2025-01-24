<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $result = $conn->query("SELECT * FROM  salles ORDER BY capacite ASC");
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
                    <th>ID</th>
                    <th>Nom</th>
                    <th>id_etage</th>
                    <th>capacite</th>
                   
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
                            <td>" . $champs['id'] . "</td>
                            <td>" . $champs['nom'] . "</td>
                            <td>" . $champs['id_etage'] . "</td>
                            <td>" . $champs['capacite'] . "</td>
                        </tr>");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>

 