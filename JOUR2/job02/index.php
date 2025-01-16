<?php
for ($nombre = 0; $nombre <= 1337; $nombre++) 
{
    if ($nombre == 26 or $nombre == 55 or $nombre ==  37 or $nombre== 88 or $nombre== 1111)
    {
         continue ;
       
    } 
    else 
    {
        echo "Mon nombre est : $nombre<br>"; 
    }
}
?>