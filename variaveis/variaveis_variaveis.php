<div class="titulo">Variaveis Variaveis</div>

<?php

$a = 'valorA';
$$a = 'valorAA';

echo "$a {$$a} ${$a} $valorA";

$epa = 'opa';
$opa = 'vish';
$vish = 'eitaaa!';

echo '<br>';
echo "$epa {$$epa} {$$$epa}";