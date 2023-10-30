<?php

$variavel = "Hello World\n";

// Função local acessa a variável global usando a palavra-chave 'global'
function Função1() {
    global $variavel;
    echo $variavel;
}

function Função2() {
//    echo $variavel; // Função2 acessa a variável global diretamente
}

// Chame as funções
Função1();
echo "<br>";
Função2();



//exemplo
$var1 = 3;
$var2 = 4;
$var3 = 0;


function multiplica() {
$GLOBALS["var3"] = $GLOBALS["var1"] * $GLOBALS["var2"];
}
multiplica();
echo $var3;

?>
