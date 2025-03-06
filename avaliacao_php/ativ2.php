<?php

echo "<div>";

echo "<form method='POST'>
        <label>Digite sua idade:</label>
        <input type='number' name='idade' required>
        <button type='submit'>Calcular</button>
      </form>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = (int) $_POST['idade'];

    if ($idade >= 60) {
        echo "<p>Você é idoso.</p>";
    } elseif ($idade >= 18) {
        echo "<p>Você é maior de idade.</p>";
    } else {
        echo "<p>Você é menor de idade.</p>";
    }
}
echo "</div>";
?>
