<?php

interface LutadorUEC {
    public function apresentarLutador();
    public function showInfo();
    public function ganharLuta();
    public function perderLuta();
    public function empatarLuta();
}

interface LutaUEC {
    public function marcarLuta();
    public function lutar();
}

class Luta implements LutaUEC {
    private Lutador $desafiante;
    private Lutador $desafiado;
    private bool $isAprovada;

    public function __construct(Lutador $desafiante, Lutador $desafiado) {
        $this->isAprovada = false;
        $this->desafiante = $desafiante;
        $this->desafiado = $desafiado;
    }

    public function marcarLuta() {
        if ($this->desafiante->getCategoria() === $this->desafiado->getCategoria() && $this->desafiante !== $this->desafiado) {
            $this->isAprovada = true;
            echo "Luta marcada: {$this->desafiante->getNome()} versus {$this->desafiado->getNome()}! 🥊<br>";
        } else {
            $this->isAprovada = false;
            echo "Luta inválida! Os lutadores precisam estar na mesma categoria e não podem ser o mesmo! ❌<br>";
        }
    }

    public function lutar() {
        if ($this->isAprovada) {
            $this->desafiante->apresentarLutador();
            $this->desafiado->apresentarLutador();
            echo "{$this->desafiante->getNome()} está lutando contra {$this->desafiado->getNome()}! 🥊<br>";
            $vencedor = $this->analisarProbabilidades();

            if ($vencedor === $this->desafiante) {
                $this->desafiante->ganharLuta();
                $this->desafiado->perderLuta();

            } else if ($vencedor === $this->desafiado) {
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();

            } else {
                echo "A luta terminou em empate. 🤝<br>";
                $this->desafiante->empatarLuta();
                $this->desafiado->empatarLuta();

            }
        } else {
            echo "Luta não aprovada, não pode acontecer! ❌<br>";
        }
    }

    private function analisarProbabilidades() {
        $probDesafiante = ($this->desafiante->getVitorias() - $this->desafiante->getDerrotas());
        $probDesafiado = ($this->desafiado->getVitorias() - $this->desafiado->getDerrotas());
        
        if ($probDesafiante > $probDesafiado) {
            return $this->desafiante;
        } else if ($probDesafiante < $probDesafiado) {
            return $this->desafiado;
        } else {
            return null; // Empate
        }
    }
}

class Lutador implements LutadorUEC {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->definirCategoria();
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->definirCategoria();
    }

    private function definirCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function apresentarLutador() {
        echo "Lutador: {$this->getNome()}<br>";
        echo "Origem: {$this->nacionalidade}<br>";
        echo "{$this->idade} anos<br>";
        echo "{$this->altura}m de altura<br>";
        echo "Pesando {$this->peso}kg<br>";
        echo "Categoria: {$this->categoria}<br>";
        echo "Vitórias: {$this->vitorias} | Derrotas: {$this->derrotas} | Empates: {$this->empates}<br><br>";
    }

    public function showInfo() {
        echo "---------------------------<br>";
        echo "Lutador: {$this->getNome()}<br>";
        echo "Categoria: {$this->getCategoria()}<br>";
        echo "Histórico: {$this->vitorias} vitórias, {$this->derrotas} derrotas e {$this->empates} empates.<br>";
        echo "---------------------------<br>";
    }

    public function ganharLuta() {
        $this->vitorias++;
        echo "{$this->getNome()} ganhou a luta! 🏆<br>";
    }

    public function perderLuta() {
        $this->derrotas++;
        echo "{$this->getNome()} perdeu a luta. 😞<br>";
    }

    public function empatarLuta() {
        $this->empates++;
        echo "{$this->getNome()} empatou a luta. 🤝<br>";
    }
}
?>
