<?php
require_once "interface.php";

class ControleRemoto implements Controlador {
    private $ligado;
    private $volume;
    private $tocando;

    public function __construct() {
        $this->ligado = false;
        $this->volume = 50;
        $this->tocando = false;
    }    

    public function ligar() {
        if ($this->ligado) {
            echo "Já está ligado.<br>";
        } else {
            $this->ligado = true;
            echo "Ligado.<br>";
        }
    }

    public function desligar() {
        if ($this->ligado) {
            $this->ligado = false;
            echo "Desligando...<br>";
        } else {
            echo "Já está desligado.<br>";
        }
    }    

    public function abrirMenu() {
        echo "<br>____________Menu____________<br><br>";
        $this->showInfo();
        echo "____________________________";

    }

    public function fecharMenu() {
        echo "Fechando o menu...<br>";
    }

    public function aumentarVolume() {
        if ($this->ligado) {
            if ($this->volume < 100) {
                $this->volume++;
                echo "Volume aumentado para: {$this->volume}<br>";
            } else {
                echo "Volume já está no máximo!<br>";
            }
        } else {
            echo "Não pode aumentar volume com o controle desligado!<br>";
        }
    }
    

    public function diminuirVolume() {
        if ($this->ligado) {
            if ($this->volume > 0) { 
                $this->volume--;
                echo "Volume diminuído para: {$this->volume}<br>";
            } else {
                echo "Volume já está no mínimo!<br>";
            }
        } else {
            echo "Não pode diminuir volume com o controle desligado!<br>";
        }
    }
    
    public function ativarMudo() {
        if ($this->ligado) {
            if ($this->volume > 0) {
                $this->volume = 0;
                echo "MUDO ativado!<br>";
            } else {
                echo "O volume já está mudo.<br>";
            }
        } else {
            echo "Não é possível ativar mudo com o controle desligado.<br>";
        }
    }
    
    public function desativarMudo() {
        if ($this->ligado) {
            if ($this->volume == 0) {
                $this->volume = 50; // ou restaurar o último volume salvo
                echo "Saindo do mudo, volume: {$this->volume}.<br>";
            } else {
                echo "O controle já não está no mudo.<br>";
            }
        } else {
            echo "Não é possível desativar mudo com o controle desligado.<br>";
        }
    }
   
    public function playPause() {
        if ($this->ligado) {
            if ($this->tocando) {
                $this->tocando = false;
                echo "Pausando reprodução...<br>";
            } else {
                $this->tocando = true;
                echo "Play...<br>";
            }
        } else {
            echo "Não é possível reproduzir com o controle desligado!<br>";
        }
    }

    public function getLigado() {
        return $this->ligado;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function getTocando() {
        return $this->tocando;
    }

    public function setLigado($ligado = true) {
        $this->ligado = $ligado;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
    }

    public function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function showInfo() {
        echo "O controle está ligado? " . (($this->ligado) ? "Sim" : "Não") . "<br>";
        echo "Volume: " . $this->volume . "<br>";
        echo "O aparelho está tocando? " . (($this->tocando) ? "Sim" : "Não") . "<br>";
    }
    

}
?>
