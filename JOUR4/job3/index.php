<?php

if (ISSET ($_POST)) {
   
    echo "<table border='2'>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>";
    
 
    foreach ($_POST as $key => $value)
         {
            echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>";
        }
    echo "</table>";
} else 
{
    echo "Aucun argument POST n'a été passé.";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./contact.css" />
  </head>
  <body>
    <header>
    
    </header>
    <main>
      <!-- Formulaire de contact -->
      <section id="contact" class="contact-section">
        <h2>Envoyez-nous un message</h2>
        <form action="index.php" method="POST" class="contact-form">
          <label for="nom">Nom :</label>
          <input type="text" id="nom" name="nom" required />

          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required />

          <label for="message">Message :</label>
          <textarea id="message" name="message" rows="4" required></textarea>

          <button type="submit">Envoyer</button>
        </form>
      </section>
    </main>
  </body>
  
</html>