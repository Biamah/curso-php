<div class="titulo">Desafio String</div>

<?php
echo '<p>Enunciado: </p>';
echo "<p>Avaliando os métodos da documentação da string, qual o método que a posição do texto 'abc' na string '!abcaBcabc' retorne 1?</p>";

$text = '!abcaBcabc';
$find = 'abc';

$pos = strpos($text, $find);
echo $pos;