<div class="titulo">Operadores Relacionais</div>

<?php

// var_dump(1 == 1);
// var_dump(1 > 1);
// var_dump(1 >= 1);
// var_dump(1 != 1);
// var_dump(1 <> 1);

var_dump(1 == '1');
// igualdade estrita, compara os tipos também
var_dump(1 === '1');

echo '<p>Relacionais no If/Else</p><hr>';

$idade = 66;

if($idade < 18) {
    echo 'Menor de idade<br>';
} else if($idade <= 65) {
    echo 'Adulto<br>';
} else {
    echo 'Terceira idade<br>';
}

echo '<p>Spaceship</p><hr>';

var_dump(5 <=> 3);
echo '<br>';
var_dump(5 <=> 5);
echo '<br>';
var_dump(3 <=> 5);
echo '<br>';

echo '<p>Valores pode ser V ou F</p><hr>';
var_dump(!!3);
echo '<br>';
var_dump(!!0);
echo '<br>';
var_dump(!!"");
echo '<br>';
var_dump(!!" ");


?>

<style>
    p {
        margin-bottom: 0px;
    }

    hr {
        margin-top: 0;
    }
</style>