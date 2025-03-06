<?php

echo "<form method='POST'>
        <label>Nome:</label>
        <input type='text' name='nome' required>
        <label>Idade:</label>
        <input type='number' name='idade_form' required>
        <button type='submit'>Enviar</button>
      </form>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['idade_form'])) {
    echo "<p>Olá, " . htmlspecialchars($_POST['nome']) . "! Você tem " . (int)$_POST['idade_form'] . " anos.</p>";
}

?>
