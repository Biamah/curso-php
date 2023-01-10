<div class="titulo">Desafio Pi</div>

<?php

echo pi();
$pi = 3.14;

if ($pi === pi()) {
    echo '<br>Iguais';
} else {
    echo '<br>Diferente';
}

// Resposta
$piErrado = 2.8;

echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if($pi - pi() <= 0.01) {
    echo '<br>Praticamento iguais!';
}

if($pi - $piErrado <= 0.01) {
    echo '<br>Praticamento iguais!';
} else {
    echo '<br>Valor errado!';
}