<?php

echo "<form method='POST'>
        <label>Digite um e-mail:</label>
        <input type='email' name='email' required>
        <button type='submit'>Validar</button>
      </form>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    function validar_email($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? "E-mail válido" : "E-mail inválido";
    }
    echo "<p>" . validar_email($_POST['email']) . "</p>";
}