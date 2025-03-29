<?php

abstract class Pessoa {
    protected $idade;
    protected $nome;
    protected $sexo;

    // Construtor
    protected function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    // Getters
    protected function getIdade() {
        return $this->idade;
    }

    protected function getNome() {
        return $this->nome;
    }

    protected function getSexo() {
        return $this->sexo;
    }

    // Setters
    protected function setIdade($idade) {
        $this->idade = $idade;
    }

    protected function setNome($nome) {
        $this->nome = $nome;
    }

    protected function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    protected abstract function fazerAniversario();
}
