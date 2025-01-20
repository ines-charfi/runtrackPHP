<?php
$tab = ["abc", "ghi", "def","tyr","nop"];
function bubblesort($tab, $croissant) {
    $n = count($tab);
    
    for ($i = 0; $i < $n - 1; $i++) {
        $index = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if (($croissant && $tab[$j] < $tab[$index]) || (!$croissant && $tab[$j] > $tab[$index])) {
                $index = $j;
            }
        }
        
     
        if ($index != $i) {
            $temp = $tab[$i];
            $tab[$i] = $tab[$index];
            $tab[$index] = $temp;
        }
    }
    
    return $tab;
}


$tab1 = ["abc", "ghi", "def","tyr","nop"];
print_r(bubblesort($tab1, true));  
print_r(bubblesort($tab1, false)); 
?>
