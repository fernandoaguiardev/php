<?php
class Caneta
{
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    // PHP não suporta sobrecarga de método diretamente, então usamos valores padrão
    public function __construct($modelo = "Genérico", $cor = "Azul", $ponta = 0.7, $tampada = true)
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->tampada = $tampada;
    }

    public function escrever()
    {
        echo !$this->tampada ? "Escrevendo...<br>" : "A caneta está tampada.<br>Não posso escrever.<br>";
    }

    public function tampar()
    {
        $this->tampada = true;
    }

    public function destampar()
    {
        $this->tampada = false;
    }

    // Getters e Setters
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }

    public function getTampada()
    {
        return $this->tampada;
    }

    public function setTampada($tampada)
    {
        $this->tampada = $tampada;
    }

    public function imprimirPropriedades()
    {
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Cor: " . $this->cor . "<br>";
        echo "Ponta: " . $this->ponta . "<br>";
        echo "Tampada?: " . ($this->tampada ? "Sim" : "Não") . "<br>";
    }
}

?>
