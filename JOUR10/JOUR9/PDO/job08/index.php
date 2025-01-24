<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $result = $conn->query("SELECT SUM(capacite) AS total from salles");
    $etudiants = $result->fetch_assoc();
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
                    <th>Capacite_totale</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                        echo("
                        <tr>
                            <td>" . $etudiants['total']. "</td>
                        </tr>");
                ?>
            </tbody>
        </table>
    </body>
</html>

 