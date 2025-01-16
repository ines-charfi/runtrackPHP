<?php
for ($nombre = 0; $nombre <= 100; $nombre++) 
{
if($nombre >= 0 && $nombre <= 20)
{
echo"Mon numéro est :<i>$nombre</i><hr>";
}
elseif($nombre >= 25 && $nombre <= 50)
{if ($nombre == 42)
    {
       echo "La Plateforme_<br>";
   }
echo"Mon numéro est :<b><u>$nombre</u></b><hr>";
}

else
    echo "Mon numéro est : $nombre <hr>";
}
?>



