<div class="titulo">Operadores Lógicos</div>

<?php

echo '<p>V ou F</p><hr>';

var_dump(true);
echo '<br>';

var_dump(!true);
echo '<br>';

// dupla negação volta a ser true, não recomendado o uso
var_dump(!!true);

echo "<br><p>Tabela da verdade 'AND' (E)</p><hr>";
// pode ser usado && ou and
// true and true - true && true

var_dump(true && true);
echo '<br>';

var_dump(true && false);
echo '<br>';

var_dump(false && true);
echo '<br>';

var_dump(false && false);
echo '<br>';

var_dump(true && 3 > 2 && 7 <= 7);
echo '<br>';

var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');
echo '<br>';

echo "<p>Tabela da verdade 'OR' (OU)</p><hr>";
// pode ser usado || ou OR
// true || true - true or true

var_dump(true || true);
echo '<br>';

var_dump(true || false);
echo '<br>';

var_dump(false || true);
echo '<br>';

var_dump(false || false);
echo '<br>';

echo "<p>Tabela da verdade 'XOR' (OU Exclusivo)</p><hr>";
// pode ser simulado usando o diferente !=
// true != true

var_dump(true xor true);
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor true);
echo '<br>';
var_dump(false xor false);
echo '<br>';

var_dump(false != false);
echo '<br>';

echo "<p>Exemplo</p><hr>";

$idade = 62;
$sexo = 'M';

if($idade >= 60 && $sexo === 'F') {
    echo 'Pode se aposentar';
} else if($idade >= 65 && $sexo === 'M') {
    echo 'Pode se aposentar';
} else {
    echo 'Vai ter que trabalhar mais';
}
