<?php
class Caneta {

    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    // Método para simular o rabisco da caneta
    function rabiscar() {
        if ($this->tampada) {
            echo "Não posso rabiscar, a caneta está tampada!<br>";
        } else {
            echo "Rabiscando...<br>";
        }
    }

    // Método para tampar a caneta
    function tampar() {
        $this->tampada = true;
        echo "A caneta foi tampada.<br>";
    }

    // Método para destampar a caneta
    function destampar() {
        $this->tampada = false;
        echo "A caneta foi destampada.<br>";
    }

    // Método para exibir as informações da caneta
    function mostrarInfo() {
        echo "Modelo: $this->modelo <br>";
        echo "Cor: $this->cor <br>";
        echo "Ponta: $this->ponta <br>";
        echo "Carga: $this->carga <br>";
        echo "Tampada: " . ($this->tampada ? "Sim" : "Não") . "<br>";
    }
}
?>
