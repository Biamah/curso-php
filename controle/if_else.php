<div class="titulo">If Else</div>

<?php
// if (false)
//     echo 'Serei impresso?';
//     echo 'Serei impresso novamente?';

// bloco de código
// {
//     echo 'Linha 1';
//     echo 'Linha 2';
// }

// if (true)

//     echo 'sentença avulsa!!!<br>';

// {
//     echo 'Serei impresso?';
//     echo '<br>';
//     echo 'Serei impresso novamente?';
// }


// acaba após o ; e o bloco abaixo perde a relação com o if
// if (false)
//     ; 
    
// {
//     echo 'teste';
// }

// if(true) {
//     echo 'Serei impresso?<br>';
// }


// sempre será executado apenas um dos dois
if (true)
    echo 'Verdadeiro<br>';
else
    echo 'Falso<br>';

    
if(false) {
    echo 'Passo a<br>';
} else if(true) {
    echo 'Passo b<br>';
} else {
    echo 'Último passo';
}
    
echo 'Fim<br>';
