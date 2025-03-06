<?php

echo "<form method='POST'>
        <label>Digite o primeiro número:</label>
        <input type='number' name='num1' required>
        <label>Digite o segundo número:</label>
        <input type='number' name='num2' required>
        <button type='submit'>Calcular</button>
      </form>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = (int) $_POST['num1'];
    $num2 = (int) $_POST['num2'];
    
    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $multiplicacao = $num1 * $num2;
    $divisao = $num2 != 0 ? $num1 / $num2 : "Indefinida";
    
    echo "<div>
            <p>Soma: $soma</p>
            <p>Subtração: $subtracao</p>
            <p>Multiplicação: $multiplicacao</p>
            <p>Divisão: $divisao</p>
          </div>";
    
echo "</div>";}
?>
