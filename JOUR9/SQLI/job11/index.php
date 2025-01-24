<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $result = $conn->query("SELECT AVG(capacite) AS MOYENNE FROM salles");
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
                    <th>Capacite_moyenne</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                        echo("
                        <tr>
                            <td>" . $etudiants['MOYENNE']. "</td>
                        </tr>");
                ?>
            </tbody>
        </table>
    </body>
</html>

 