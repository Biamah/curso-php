<div class="titulo">Operador Ternário</div>

<?php

$idade = 10;
$status;

// if($idade >= 18) {
//     $status = 'Maior de idade';
// } else {
//     $status = 'Menor de idade';
// }
        
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';

echo "$status<br>";

$idade = 70;

$status = $idade >= 18 ? $idade >= 60 ? 'Aposentado' : 'Maior de idade' : 'Menor de idade';

echo "$status<br>";