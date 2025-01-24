<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    try 
    {
    
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $conn->prepare("SELECT COUNT(*) AS nbre FROM étudiants");
        $result->execute();
        $etudiants = $result->fetchAll(PDO::FETCH_ASSOC);
        var_dump($etudiants);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        $conn = null;
    }
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

 