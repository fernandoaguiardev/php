<?php

abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membros;

    protected function __construct($peso, $idade, $membros) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
    }

    // Métodos getters e setters
    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getMembros() {
        return $this->membros;
    }

    public function setMembros($membros) {
        $this->membros = $membros;
    }

    public abstract function locomoverSe();
    public abstract function alimentarSe();
    public abstract function emitirSom();
}

class Mamifero extends Animal {
    protected $corPelo;

    public function __construct($peso, $idade, $membros, $corPelo) {
        parent::__construct($peso, $idade, $membros);
        $this->corPelo = $corPelo;
    }

    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }

    public function locomoverSe() {
        echo "O mamífero está correndo.";
    }

    public function alimentarSe() {
        echo "O mamífero está se alimentando de leite.";
    }

    public function emitirSom() {
        echo "O mamífero emitiu um som característico.";
    }
}

class Reptil extends Animal {
    private $corEscama;

    public function __construct($peso, $idade, $membros, $corEscama) {
        parent::__construct($peso, $idade, $membros);
        $this->corEscama = $corEscama;
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    public function locomoverSe() {
        echo "O réptil está rastejando.";
    }

    public function alimentarSe() {
        echo "O réptil está comendo pequenos insetos.";
    }

    public function emitirSom() {
        echo "O réptil emitiu um som peculiar.";
    }
}

class Peixe extends Animal {
    private $corEscama;

    public function __construct($peso, $idade, $membros, $corEscama) {
        parent::__construct($peso, $idade, $membros);
        $this->corEscama = $corEscama;
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    public function locomoverSe() {
        echo "O peixe está nadando.";
    }

    public function alimentarSe() {
        echo "O peixe está comendo pequenos organismos aquáticos.";
    }

    public function emitirSom() {
        echo "O peixe não emite sons audíveis.";
    }

    public function soltarBolha() {
        echo "O peixe soltou uma bolha na água.";
    }
}

class Ave extends Animal {
    private $corPena;

    public function __construct($peso, $idade, $membros, $corPena) {
        parent::__construct($peso, $idade, $membros);
        $this->corPena = $corPena;
    }

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

    public function locomoverSe() {
        echo "A ave está voando.";
    }

    public function alimentarSe() {
        echo "A ave está bicando sementes e pequenos insetos.";
    }

    public function emitirSom() {
        echo "A ave está cantando.";
    }

    public function fazerNinho() {
        echo "A ave construiu um ninho.";
    }
}

final class Canguru extends Mamifero {
    public final function locomoverSe() {
        echo "O canguru está saltando.";
    }
}

final class Cachorro extends Mamifero {
    public final function emitirSom() {
        echo "O cachorro está latindo: Au! Au!";
    }

    public final function locomoverSe() {
        echo "O cachorro está correndo com a linha de fora";
        
    }
}

final class Cobra extends Reptil {
    public final function locomoverSe() {
        echo "A cobra está deslizando silenciosamente.";
    }
}

final class Tartaruga extends Reptil {
    public final function locomoverSe() {
        echo "A tartaruga está se movendo lentamente.";
    }
}

final class Goldfish extends Peixe {
    public final function alimentarSe() {
        echo "O goldfish está comendo flocos de ração.";
    }
}

final class Arara extends Ave {
    public final function emitirSom() {
        echo "A arara está gritando alto!";
    }
}