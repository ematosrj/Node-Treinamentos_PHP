<?php
// Simulando a função que busca informações no banco de dados
function buscarAlunoNoBanco($idAluno) {
    // Substitua isso com a lógica real de busca no banco
    $alunos = array(
        1 => array("Nome" => "João", "Idade" => 25, "Cidade" => "São Paulo"),
        2 => array("Nome" => "Maria", "Idade" => 22, "Cidade" => "Rio de Janeiro"),
        3 => array("Nome" => "Pedro", "Idade" => 20, "Cidade" => "Belo Horizonte")
    );

    return isset($alunos[$idAluno]) ? $alunos[$idAluno] : null;
}

// Criando um array bidimensional com informações de alunos
$idsAlunos = array(1, 2, 3);
$alunos = array();

foreach ($idsAlunos as $id) {
    $aluno = buscarAlunoNoBanco($id);

    if ($aluno !== null) {
        $alunos[] = $aluno;
    }
}

// Usando a função echo para imprimir o array bidimensional
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
