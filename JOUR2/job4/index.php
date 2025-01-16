<?php
for($nombre = 0; $nombre<=100 ; $nombre++)
{

if($nombre % 3 == 0)
{
  echo"FIZZ<br>";
}

elseif($nombre % 5== 0)
{
    echo "BUZZ<br>";
}
elseif

(($nombre %5== 0) && ($nombre % 3 == 0))
{
echo "FIZZBUZZ<br>";
}
else
{
echo "$nombre<br>";
}}
?>