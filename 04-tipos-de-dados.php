<?php

/*******ESCALARES*********/

echo '<p style="color: red;">DADOS STRING</p><br>';
////////STRING////////////
$nome = "Olá Mundo 123 !@#";
var_dump($nome);
echo "<br><br><br>";


if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<b><hr>";

echo '<p style="color: red;">DADOS NULOS</p><br>';

//////////NULL///////////////
$nulo = null;
var_dump($nulo);
echo "<br><br><br>";

if (is_null($nulo)):
    echo "É um valor nulo (null)";
else:
    echo "Não é um valor nulo (null)";
endif;
echo "<hr>";

echo '<p style="color: red;">DADOS BOOLEANOS</p><br>';

////////////BOOlEANO////////////
$verdadeiro = true;
var_dump($verdadeiro);
echo "<br><br><br>";

if (is_bool($verdadeiro)):
    echo "É um valor booleano verdadeiro";
else:
    echo "Não é um valor booleano verdadeiro";
endif;
echo "<b><hr>";

echo '<p style="color: red;">DADOS FLUTUANTES</p><br>';

$numero = 3.14;
var_dump($numero);
echo "<br><br><br>";

if (is_float($numero)):
    echo "É um número de ponto flutuante";
else:
    echo "Não é um número de ponto flutuante";
endif;
echo "<b><hr>";

echo '<p style="color: red;">DADOS INTEIROS</p><br>';

////////////INTEIROS////////////
$numero = 42;
var_dump($numero);
echo "<br><br><br>";

if (is_int($numero)):
    echo "É um número inteiro";
else:
    echo "Não é um número inteiro";
endif;
echo "<b><hr>";

/*******COMPOSTOS*********/
echo '<p style="color: red;">ARRAY</p><br>';
$carros = array("GOL", "UNO", "CELTA",12 , 20.6, true);
var_dump($carros);

echo "<br><br><br>";

echo "<hr>";

//////////////// ORIENTAÇÃO EM OBJETOS PHP/////////////////////
echo '<p style="color: red;">OBJETOS DE DADOS</p><br>';
class Cliente {
    public $nome;
    public function atribuirNome($nome) {

        $this->$nome = $nome;


    }
}
    $cliente = new Cliente();

    $cliente->atribuirNome("Matos");

var_dump($cliente)    ; 


// Declarar uma simples função para retornar um array
// array para seu objetos
function solicitar_estudantes($objeto)
{
    if (!is_object($objeto)) {
        return false;
    }

    return $objeto->estudantes;    //////objeto recebe estudantes
}

// Declare a new class instance and fill up 
// some values
$objeto = new stdClass();
$objeto->estudantes = array('Kalle', 'Ross', 'Felipe');

var_dump(solicitar_estudantes(null));

var_dump(solicitar_estudantes($objeto));

?>