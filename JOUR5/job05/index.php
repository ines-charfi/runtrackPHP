<?php
function occurrences($str, $char) {
   
    return substr_count($str, $char);
}
echo"Le nombre d'occurrences  est : ". occurrences("bojnour","o");
?>
