<div class="titulo">Valor Vs Referência</div>

<?php

$variavel = 'valor inicial';

echo $variavel;

// atribuição por valor
$variavelValor = $variavel;

echo '<br>', $variavelValor;

$variavelValor = 'novo valor';
echo '<br>', $variavelValor;

// atribuição por referencia
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo '<br>', 'marcando linha';
echo '<br>', $variavel;
echo '<br>', $variavelReferencia;
