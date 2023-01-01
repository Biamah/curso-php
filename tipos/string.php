<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string', '<br>';

echo '<br>';
var_dump("Eu também");
echo '<br>';
var_dump("Eu tambem");
echo '<br>';

// concatenação
echo "Nós também" . ' somos';
echo '<br>', 'também aceito', ' virgulas';

echo '<br>';
echo "'Teste'" . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";
echo '<br>';

print("<br>Também existe o método print");
print"<br>Também existe o método print";

echo '<br>';
echo ('echo com parenteses');

// Algumas funções de string

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('Minimizado');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . strlen('Eu também');
echo '<br>' . mb_strlen('Eu também', 'utf-8');
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');
