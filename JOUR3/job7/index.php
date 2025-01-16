<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
    echo "Ma phrase initiale est : $str<br>";

    $str_modified = '';  

    for ($i = 0; $i < strlen($str) - 1; $i++) 
    {
        $str_modified .= $str[$i + 1];  
    }
        $str_modified .= $str[0];  

        echo "Ma phrase modifiée est : $str_modified <br>";
?>
