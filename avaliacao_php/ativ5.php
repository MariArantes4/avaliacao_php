<?php

$fibonacci = [0, 1];
for ($i = 2; $i < 10; $i++) {
    $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}
echo "<h3>Sequência de Fibonacci</h3><p>" . implode(", ", $fibonacci) . "</p>";

?>