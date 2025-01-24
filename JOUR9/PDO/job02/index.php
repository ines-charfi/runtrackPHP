<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
      //On établit la connexion
      try {
       
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $conn->prepare("SELECT nom , capacite FROM salles");
        $result->execute();
        $etudiants = $result->fetchAll(PDO::FETCH_ASSOC);
        var_dump($etudiants);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage(); 
    }
    $conn = null;
  
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

 