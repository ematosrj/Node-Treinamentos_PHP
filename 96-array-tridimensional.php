<?php
// Criando um array tridimensional com informações de alunos
$alunos = array(
    array(
        array("Nome" => "João", "Idade" => 25, "Cidade" => "São Paulo"),
        array("Nome" => "Maria", "Idade" => 22, "Cidade" => "Rio de Janeiro")
    ),
    array(
        array("Nome" => "Pedro", "Idade" => 20, "Cidade" => "Belo Horizonte"),
        array("Nome" => "Ana", "Idade" => 23, "Cidade" => "Curitiba")
    )
);

// Usando a função echo para imprimir o array tridimensional
echo "Informações dos Alunos:";
echo "<pre>"; // <pre> é usado para formatar a saída

foreach ($alunos as $curso) {
    foreach ($curso as $aluno) {
        echo "Nome: " . $aluno["Nome"] . "<br>";
        echo "Idade: " . $aluno["Idade"] . "<br>";
        echo "Cidade: " . $aluno["Cidade"] . "<br>";
        echo "<br>";
    }
}

echo "</pre>"; // Feche a formatação <pre>
?>
