<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $result = $conn->query("SELECT COUNT(*) AS nbre FROM étudiants");
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
                    <th>Nombre d'étudiants</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                        echo("
                        <tr>
                            <td>" . $etudiants['nbre']. "</td>
                        </tr>");
                ?>
            </tbody>
        </table>
    </body>
</html>

 