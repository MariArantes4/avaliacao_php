<?php

echo "<h3>Números de 1 a 100</h3><p>";
for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "AB ";
    } 
    
    elseif ($i % 3 == 0) {
        echo "A ";
    }
    
    elseif ($i % 5 == 0) {
        echo "B ";
    }
    
    else {
        echo "$i ";
    }
}

echo "</p>";