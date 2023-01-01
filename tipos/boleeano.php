<div class="titulo">Tipo Boleano</div>

<?php

echo TRUE;
echo '<br>';

// o valor falso não renderiza nada no browser
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);

echo '<br>' . var_dump('false');

// é boolean
echo '<br>' . is_bool(false);

// não é boolean
echo '<br>' . is_bool('true');

// regras de conversaão para bool
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero será convertido para falso
echo '<br>' . var_dump((bool) 1); // todos os outros números verdadeiros serão convertidos para verdadeiro
echo '<br>' . var_dump((bool) 10); 
echo '<br>' . var_dump((bool) 0.0); 
echo '<br>' . var_dump((bool) ""); // falso
echo '<br>' . var_dump((bool) " "); // verdadeiro
echo '<br>' . var_dump((bool) "0"); // falso
echo '<br>' . var_dump((bool) "1");  // verdadeiro
echo '<br>' . var_dump((bool) !0); 
echo '<br>' . var_dump((bool) !1); 
