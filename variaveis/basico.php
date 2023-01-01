<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';

var_dump($numeroA);
echo '<br>';

$a = 3;
$b = 16;

$soma = $a + $b;
echo $soma, '<br>';

echo isset($soma), '<br>';

unset($soma);
// echo $soma, '<br>';
// var_dump($soma);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = 'Agora sou uma string!';
echo '<br>' . $variavel;

// Nomes de variáveis
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar uso
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);