<?php

class Funcionario extends Pessoa {
    private $trabalhando;
    private $setor;

    // Construtor
    public function __construct($nome, $idade, $sexo, $setor) {
        parent::__construct($nome, $idade, $sexo); // Chama o construtor da classe mãe
        $this->trabalhando = true; // Assume que o funcionário começa trabalhando
        $this->setor = $setor;
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

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function getSetor() {
        return $this->setor;
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

    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

    // Método para mudar de setor ou situação
    public function mudarTrabalho($novoSetor, $novoStatus) {
        $this->setor = $novoSetor;
        $this->trabalhando = $novoStatus;
        echo "Funcionário agora está no setor {$this->setor}. Status de trabalho: " . ($this->trabalhando ? "Trabalhando" : "Não Trabalhando") . ".\n";
    }

    // Implementação do método abstrato 'fazerAniversario'
    public function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1); // Incrementa a idade
        echo "Feliz aniversário, " . $this->getNome() . "! Agora você tem " . $this->getIdade() . " anos.\n";
    }
}
