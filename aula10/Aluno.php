<?php

class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    // Construtor
    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo); // Chama o construtor da classe mãe
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    // Getters
    public function getIdade() {
        return $this->idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    // Setters
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    // Método para cancelar matrícula
    public function cancelarMatricula() {
        $this->matricula = null;
        echo "Matrícula cancelada.\n";
    }

    // Implementação do método abstrato 'fazerAniversario'
    public function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1); // Incrementa a idade
        echo "Feliz aniversário, " . $this->getNome() . "! Agora você tem " . $this->getIdade() . " anos.\n";
    }
}
