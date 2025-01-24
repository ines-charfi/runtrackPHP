<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $result = $conn->query("SELECT prenom , nom , naissance FROM étudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'");
    $etudiants = $result->fetch_all(MYSQLI_ASSOC);

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
        <h1>Liste des étudiants</h1>

        <table>
            <thead>
                <tr>
                   
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Naissance</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    // var_dump($etudiants);

                    foreach ($etudiants as $etudiant => $champs) {
                        // var_dump($champs);
                        echo("
                        <tr>
                            <td>" . $champs['nom'] . "</td>
                            <td>" . $champs['prenom'] . "</td>
                            <td>" . $champs['naissance'] . "</td>
                          
                        </tr>");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>

 