<?php

echo "<form method='POST'>
        <label>Digite uma palavra:</label>
        <input type='text' name='texto' required>
        <button type='submit'>Remover Vogais</button>
      </form>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['texto'])) {
    function remover_vogais($texto) {
        return preg_replace('/[aeiouAEIOU]/', '', $texto);
    }
    echo "<p>Texto sem vogais: " . remover_vogais($_POST['texto']) . "</p>";
}