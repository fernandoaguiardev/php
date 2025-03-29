<?php

class Aluno extends Pessoa {
    protected $matricula;
    protected $curso;

    // Construtor
    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo); // Chama o construtor da classe mãe
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    // Getters
    public function getIdade() {
        return $this->idade;  // Considerando que 'idade' está na classe Pessoa
    }

    public function getNome() {
        return $this->nome;  // Considerando que 'nome' está na classe Pessoa
    }

    public function getSexo() {
        return $this->sexo;  // Considerando que 'sexo' está na classe Pessoa
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    // Setters
    public function setIdade($idade) {
        $this->idade = $idade;  // Supondo que 'idade' é protegido em Pessoa
    }

    public function setNome($nome) {
        $this->nome = $nome;  // Supondo que 'nome' é protegido em Pessoa
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;  // Supondo que 'sexo' é protegido em Pessoa
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    // Método para cancelar matrícula
    public final function cancelarMatricula() {
        $this->matricula = null;
        echo "Matrícula cancelada.\n";
    }

    // Implementação do método abstrato 'fazerAniversario'
    public function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1); // Incrementa a idade
        echo "Feliz aniversário, " . $this->getNome() . "! Agora você tem " . $this->getIdade() . " anos.\n";
    }

    public function pagarMensalidade() {
        echo "Pagando mensalidade do aluno " . $this->getNome();
    }
}
