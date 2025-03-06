<?php

$arquivo = "notas.txt";
file_put_contents($arquivo, "Final do conteúdo", FILE_APPEND);
echo "<h3>Conteúdo do Arquivo</h3><p>" . nl2br(file_get_contents($arquivo)) . "</p>";