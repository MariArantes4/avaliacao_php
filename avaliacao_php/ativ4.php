<?php

echo "<form method='POST'>
        <label>Digite o comprimento do retângulo:</label>
        <input type='number' name='comprimento' required>
        <label>Digite a largura do retângulo:</label>
        <input type='number' name='largura' required>
        <button type='submit'>Calcular Área</button>
      </form>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['comprimento']) && isset($_POST['largura'])) {
    $comprimento = (float) $_POST['comprimento'];
    $largura = (float) $_POST['largura'];
    
    function calcular_area($c, $l) {
        return $c * $l;
    }
    
    echo "<p>Área do retângulo: " . calcular_area($comprimento, $largura) . "</p>";
}