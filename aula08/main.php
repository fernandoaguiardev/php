<?php

interface Publication {
    public function abrir();
    public function fechar();
    public function folhear($pagina);
    public function avancarPagina();
    public function voltarPagina();
}

class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    
    public function getNome() {
        return $this->nome;
    }
}

class Livro implements Publication {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $isOpen;
    private $leitor;
    
    // Construtor
    public function __construct($titulo, $autor, $totPaginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->isOpen = false;
        $this->leitor = null;
    }
    
    // Métodos Getters e Setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    public function getIsOpen() {
        return $this->isOpen;
    }

    public function setIsOpen($isOpen) {
        $this->isOpen = $isOpen;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
    
    public function abrir() {
        $this->isOpen = true;
    }
    
    public function fechar() {
        $this->isOpen = false;
    }
    
    public function folhear($pagina) {
        if ($pagina > 0 && $pagina <= $this->totPaginas) {
            $this->pagAtual = $pagina;
        }
    }
    
    public function avancarPagina() {
        if ($this->pagAtual < $this->totPaginas) {
            $this->pagAtual++;
        }
    }
    
    public function voltarPagina() {
        if ($this->pagAtual > 0) {
            $this->pagAtual--;
        }
    }
}

class LerLivro {
    private Livro $livro;
    private ?Pessoa $leitor;

    public function __construct(Livro $livro, ?Pessoa $leitor = null) {
        $this->livro = $livro;
        $this->leitor = $leitor;
        $this->ler();        
    }

    private function ler() {
        if ($this->leitor) {
            echo "Lendo o livro " . $this->livro->getTitulo() . " por " . $this->livro->getAutor() . "\n";
            echo "Leitor: " . $this->leitor->getNome() . "\n";
        } else {
            echo "Não há leitor definido para este livro.";
        }
    }
}

