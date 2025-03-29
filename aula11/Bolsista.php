<?php
final class Bolsista extends Aluno {
    private $bolsa;

    // Construtor
    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso); // Chama o construtor da classe mãe
        $this->bolsa = $bolsa;  // Atribui o valor da bolsa
    }

    // Getters
    public function getBolsa() {
        return $this->bolsa;
    }

    public function getIdade() {
        return $this->idade;  // Considerando que 'idade' está em Aluno
    }

    public function getNome() {
        return $this->nome;  // Considerando que 'nome' está em Aluno
    }

    public function getSexo() {
        return $this->sexo;  // Considerando que 'sexo' está em Aluno
    }

    public function getMatricula() {
        return $this->matricula;  // Acessa diretamente a propriedade 'matricula'
    }

    public function getCurso() {
        return $this->curso;  // Acessa diretamente a propriedade 'curso'
    }

    // Setters
    public function setIdade($idade) {
        $this->idade = $idade;  // Atualiza 'idade' em Aluno
    }

    public function setNome($nome) {
        $this->nome = $nome;  // Atualiza 'nome' em Aluno
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;  // Atualiza 'sexo' em Aluno
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;  // Atribui diretamente a 'matricula'
    }

    public function setCurso($curso) {
        $this->curso = $curso;  // Atribui diretamente a 'curso'
    }

    // Método para pagar mensalidade
    public function pagarMensalidade() {
        // Usando o getter diretamente dentro do echo
        echo "Pagando mensalidade do aluno {$this->getNome()} com {$this->getBolsa()}% de desconto.";
    }
}
