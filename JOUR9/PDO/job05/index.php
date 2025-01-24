<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $result = $conn->query("SELECT * FROM étudiants WHERE datediff( curdate(),  naissance )/365< 18");
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
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // var_dump($etudiants);

                    foreach ($etudiants as $etudiant => $champs) {
                        // var_dump($champs);
                        echo("
                        <tr>
                            <td>" . $champs['id'] . "</td>
                            <td>" . $champs['nom'] . "</td>
                            <td>" . $champs['prenom'] . "</td>
                            <td>" . $champs['sexe'] . "</td>
                            <td>" . $champs['email'] . "</td>

                        </tr>");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>

 