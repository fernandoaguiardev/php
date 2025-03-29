<?php

final class Visitante extends Pessoa {
    
    public function __construct($nome, $idade, $sexo) {
        parent::__construct($nome, $idade, $sexo);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1);
        echo "Feliz aniversário, " . $this->getNome() . "! Agora você tem " . $this->getIdade() . " anos.\n";
    }
}
