<?php


echo "<b><u>Nombre d'arguments POST :</u></b>" . count($_POST);
?>



<!DOCTYPE html>
<html lang="fr">
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
