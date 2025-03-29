<?php

namespace Aula14;

interface AcoesVideo {
    public function play();
    public function pause();
    public function receberLike();
}

class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $isReproduzindo;

    // Construtor
    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 0;
        $this->views = 0;
        $this->curtidas = 0;
        $this->isReproduzindo = false;
    }

    // Getters e Setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }

    public function getViews() {
        return $this->views;
    }

    public function setViews($views) {
        $this->views = $views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    public function getIsReproduzindo() {
        return $this->isReproduzindo;
    }

    public function setIsReproduzindo($isReproduzindo) {
        $this->isReproduzindo = $isReproduzindo;
    }

    // Métodos da interface AcoesVideo
    public function play() {
        if ($this->isReproduzindo) {
            echo "O vídeo já está sendo reproduzido.<br>";
        } else {
            $this->isReproduzindo = true;
            echo "O vídeo está agora sendo reproduzido.<br>";
        }
    }

    public function pause() {
        if ($this->isReproduzindo) {
            $this->isReproduzindo = false;
            echo "O vídeo foi pausado.<br>";
        } else {
            echo "O vídeo já está pausado.<br>";
        }
    }

    public function receberLike() {
        $this->curtidas++;
        echo "Like recebido. Curtidas: " . $this->curtidas . "<br>";
    }

    // Corrigindo o método de incrementar views
    public function incrementarViews() {
        $this->views++;
        echo "Aumentando visualizações. Views: " . $this->views . "<br>";
    }
}

class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    // Construtor
    public function __construct($nome, $idade, $sexo, $experiencia = 0) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = $experiencia;
    }

    // Getters e Setters
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

    public function getExperiencia() {
        return $this->experiencia;
    }

    public function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }

    // Método para adicionar experiência
    public function adicionarExperiencia($experiencia) {
        $this->experiencia += $experiencia;
    }

    // Método para exibir as informações da pessoa
    public function exibirInfo() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Sexo: " . $this->sexo . "<br>";
        echo "Experiência: " . $this->experiencia . "<br>";
    }
}

class Gafanhoto extends Pessoa {
    private $nickname;
    private $totalAssistido;

    // Construtor
    public function __construct($nome, $idade, $sexo, $nickname, $experiencia = 0, $totalAssistido = 0) {
        parent::__construct($nome, $idade, $sexo, $experiencia);
        $this->nickname = $nickname;
        $this->totalAssistido = $totalAssistido;
    }

    // Getters e Setters
    public function getNickname() {
        return $this->nickname;
    }

    public function setNickname($nickname) {
        $this->nickname = $nickname;
    }

    public function getTotalAssistido() {
        return $this->totalAssistido;
    }

    public function setTotalAssistido($totalAssistido) {
        $this->totalAssistido = $totalAssistido;
    }

    // Método para incrementar o total de vídeos assistidos
    public function assistiuMaisUm() {
        $this->totalAssistido++;
        $this->ganharExperiencia();
    }

    // Exibe as informações do gafanhoto
    public function exibirInfo() {
        parent::exibirInfo(); // Chama o método exibirInfo da classe Pessoa
        echo "Nickname: " . $this->nickname . "<br>";
        echo "Total de vídeos assistidos: " . $this->totalAssistido . "<br>";
    }

    private function ganharExperiencia() {
        $this->experiencia = $this->getExperiencia() + 1;
    }
}

class AssistirVideo {
    private $gafanhoto;
    private $video;

    public function __construct(Gafanhoto $gafanhoto, Video $video) {
        if (!$gafanhoto || !$video) {
            throw new \InvalidArgumentException("Gafanhoto e Video são obrigatórios.");
        }
        $this->gafanhoto = $gafanhoto;
        $this->video = $video;
        $this->assistir();
    }

    public function assistir() {
        try {
            // Aumenta as visualizações do vídeo
            $this->video->incrementarViews();

            // Aumenta o total assistido do Gafanhoto
            $this->gafanhoto->assistiuMaisUm();

            // Inicia a reprodução do vídeo
            $this->video->play();
        } catch (\Exception $e) {
            echo "Erro ao assistir o vídeo: " . $e->getMessage() . "<br>";
        }
    }

    public function pausar() {
        try {
            // Pausar a reprodução do vídeo
            $this->video->pause();
        } catch (\Exception $e) {
            echo "Erro ao pausar o vídeo: " . $e->getMessage() . "<br>";
        }
    }

    public function avaliar() {
        try {
            $avaliacaoAtual = $this->video->getAvaliacao();
            $this->video->setAvaliacao($avaliacaoAtual + 1);
        } catch (\Exception $e) {
            echo "Erro ao avaliar o vídeo: " . $e->getMessage() . "<br>";
        }
    }

    public function avaliarNota($nota) {
        if (!is_numeric($nota)) {
            echo "Erro: A nota deve ser um número.<br>";
            return;
        }

        if ($this->video->getViews() <= 0) {
            echo "Erro: Não é possível avaliar um vídeo sem visualizações.<br>";
            return;
        }

        try {
            $avaliacaoAtual = $this->video->getAvaliacao();
            $novaAvaliacao = ($avaliacaoAtual * $this->video->getViews() + $nota) / $this->video->getViews();
            $this->video->setAvaliacao($novaAvaliacao);
        } catch (\Exception $e) {
            echo "Erro ao avaliar o vídeo com nota: " . $e->getMessage() . "<br>";
        }
    }

    public function avaliarPorc($porc) {
        if (!is_numeric($porc)) {
            echo "Erro: A porcentagem deve ser um número.<br>";
            return;
        }

        if ($this->video->getViews() <= 0) {
            echo "Erro: Não é possível avaliar um vídeo sem visualizações.<br>";
            return;
        }

        try {
            // Lógica de avaliação usando uma escala de 0 a 100
            $avaliacaoAtual = $this->video->getAvaliacao();
            $novaAvaliacao = ($avaliacaoAtual * $this->video->getViews() + $porc) / $this->video->getViews();

            // Garante que a avaliação esteja dentro da escala de 0 a 100
            $novaAvaliacao = max(0, min(100, $novaAvaliacao));

            $this->video->setAvaliacao($novaAvaliacao);
        } catch (\Exception $e) {
            echo "Erro ao avaliar o vídeo com porcentagem: " . $e->getMessage() . "<br>";
        }
    }
}
?>