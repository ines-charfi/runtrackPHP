<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    try {
       
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $conn->prepare("SELECT etage.nom as nom_etage, salles.nom as nom_salle FROM etage JOIN salles WHERE salles.id_etage = etage.id");
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

 