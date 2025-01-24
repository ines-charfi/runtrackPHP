<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $result = $conn->query("SELECT nom , capacite FROM salles");
    $capsalles = $result->fetch_all(MYSQLI_ASSOC);

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
        <h1>Liste des salles</h1>

        <table>
            <thead>
                <tr>
                    
                    <th>Nom</th>
                    <th>Capacité</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                    // var_dump($etudiants);

                    foreach ($capsalles as $capsalle => $champs) {
                        // var_dump($champs);
                        echo("
                        <tr>
                            
                            <td>" . $champs['nom'] . "</td>
                            <td>" . $champs['capacite'] . "</td>
                           

                        </tr>");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>

 