<div class="titulo">Constantes</div>

<?php

define('TAXA_DE_JUROS', 5.9);

echo TAXA_DE_JUROS;

// TAXA_DE_JUROS = 2.5;

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
// const OUTRA_TAXA = $valorVariavel;
// echo '<br>' . OUTRA_TAXA;

echo '<br> Linha: ' . __LINE__;
echo '<br> Arquivo: ' . __FILE__;
echo '<br> Diretorio: ' . __DIR__;


// __DIR__ = 'opa';