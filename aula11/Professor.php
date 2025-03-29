<?php

class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    // Construtor
    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        parent::__construct($nome, $idade, $sexo); // Chama o construtor da classe mãe
        $this->especialidade = $especialidade;
        $this->salario = $salario;
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

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
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

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    // Método para aumentar o salário
    public function receberAumento($percentual) {
        $aumento = $this->salario * ($percentual / 100);
        $this->salario += $aumento;
        echo "O salário do professor foi aumentado em {$percentual}%. Novo salário: R$ {$this->salario}.\n";
    }

    // Implementação do método abstrato 'fazerAniversario'
    public function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1); // Incrementa a idade
        echo "Feliz aniversário, " . $this->getNome() . "! Agora você tem " . $this->getIdade() . " anos.\n";
    }
}
