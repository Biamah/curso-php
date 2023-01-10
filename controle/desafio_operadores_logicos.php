<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 
    Dois trabalhos -> terça e quinta!
    - se os dois trabalhos forem executados -> tv 50' e Sorvete
    - se apenas um for executado -> tv 32' e Sorvete
    - se nenhum for executado -> fica em casa
 -->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>

    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>

    <button>Executar</button>
</form>

<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>

<?php

$trabalho1 = !!$_POST['t1'];
$trabalho2 = !!$_POST['t2'];

if($trabalho1 === true && $trabalho2 === true) {
    echo "Vamos comprar a Tv 50' e tomar Sorvete!";
} else if($trabalho1 === true && $trabalho2 === false || $trabalho1 === false && $trabalho2 === true) {
    echo "Vamos comprar a Tv 32' e tomar Sorvete!";
} else {
    echo 'Hoje vamos ficar em casa!';
}