<?php
  $username = $_POST['param1'];
  $password = $_POST['param2'];

    if ($username == "John" && $password =="Rombo") 
    
        echo "C'est pas ma guerre<br>";
    
        else
    
            echo "Votre pire cauchemar<br>";
    
    

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./contact.css" />
    <title>formulaire-POST</title>
</head>
<body>
        

    <form action="index.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="param1"><br><br>
        
        <label for="param2">Password:</label>
        <input type="text" id="password" name="param2"><br><br>
        
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
