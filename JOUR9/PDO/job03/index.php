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
    $result = $conn->prepare("SELECT nom , prenom , naissance FROM étudiants WHERE sexe = 'Femme'");
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

 