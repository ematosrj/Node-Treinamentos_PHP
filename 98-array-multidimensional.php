<?php
// Criando um array multidimensional com informações de alunos
$alunos = array(
    array("Nome" => "João", "Idade" => 25, "Cidade" => "São Paulo"),
    array("Nome" => "Maria", "Idade" => 22, "Cidade" => "Rio de Janeiro"),
    array("Nome" => "Pedro", "Idade" => 20, "Cidade" => "Belo Horizonte")
);

// Usando a função echo para imprimir o array
echo "Informações dos Alunos:";
echo "<pre>"; // <pre> é usado para formatar a saída

foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["Nome"] . "<br>";
    echo "Idade: " . $aluno["Idade"] . "<br>";
    echo "Cidade: " . $aluno["Cidade"] . "<br>";
    echo "<br>";
}

echo "</pre>"; // Feche a formatação <pre>
?>
