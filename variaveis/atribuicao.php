<?php $title = 'Atribuições'; ?>

<div class="titulo"><?php echo $title ?></div>

<?php

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 3;
echo '<br>' . $numero;

$numero = $numero + 1.5;
echo '<br>' . $numero;

$numero++;
echo '<br>' . $numero;

$numero--;
echo '<br>' . $numero;

$numero -= 5;
echo '<br>' . $numero;

$numero += 15;
echo '<br>' . $numero;

$numero *= 15;
echo '<br>' . $numero;

$numero %= 15;
echo '<br>' . $numero;

$numero **= 4;
echo '<br>' . $numero;

$numero .= 4; // apenas concatenando
echo '<br>' . $numero;

$variavel_inesxistente = 'valor existente';
echo '<br>' . $variavel_inesxistente;

$valor = $variavel_inesxistente ?? 'Valor default';
echo '<br>' . $valor;