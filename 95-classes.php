<?php
// Definição de uma classe chamada "Pessoa"
class Pessoa {
    // Propriedades (variáveis) da classe
    public $nome;
    public $idade;

    // Construtor da classe
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método da classe para exibir informações da pessoa
    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . " anos<br>";
    }
}

// Criando objetos da classe "Pessoa"
$pessoa1 = new Pessoa("João", 30);
$pessoa2 = new Pessoa("Maria", 25);

// Chamando o método para exibir informações
echo "Informações da Pessoa 1:<br>";
$pessoa1->exibirInformacoes();

echo "<br>Informações da Pessoa 2:<br>";
$pessoa2->exibirInformacoes();
?>
