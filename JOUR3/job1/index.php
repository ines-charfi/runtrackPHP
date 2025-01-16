<?php
$nombres =[200, 204, 173, 98, 171, 404, 459] ;
print_r( $nombres);
foreach ($nombres as $nombre) {
    if ($nombre % 2 == 0) 
    { echo"$nombre est un nombre pair<br>";
    }
        else
        echo "$nombre n'est pas un nombre pair<br>";
}
?>