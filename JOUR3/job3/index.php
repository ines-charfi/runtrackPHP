<?php
$str="“I'm sorry Dave I'm afraid I can't do that”.";
echo "My sentence is :$str<br>";
 $voyelle="a,e,i,o,u,y,A,E,I,O,U,Y";

for ($i= 0; $i < strlen($str); $i++)
for ($j= 0; $j < strlen($voyelle); $j++)
 
    if($str[$i]==  $voyelle[ $j ])
    {
        echo "".$str[$i]."";
    }
    ?>

