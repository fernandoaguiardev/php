<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula15 POO em php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Projeto Final</h1>
    <header>
        <p>Criada a classe AssistirVideo que estabelece uma relação entre as classes Gafanhto e Video.</p>

    </header>
    <main>
        <section>
            <div id="terminal">
                <h1>Terminal</h1>
                <p>
                    <?php

                    require_once "main.php";

                    use Aula14\AssistirVideo;
                    use Aula14\Gafanhoto;
                    use Aula14\Video;

                    // Criando 6 objetos Gafanhoto
                    $g1 = new Gafanhoto("Jurema da Silva", 28, "F", "Juju_Memezeira");
                    $g2 = new Gafanhoto("Cleiton Rasta", 35, "M", "Cleitinho_Paz_e_Amor");
                    $g3 = new Gafanhoto("Gertrudes Pereira", 62, "F", "Vovó_Gamer");
                    $g4 = new Gafanhoto("Valdisney Junior", 18, "M", "Valdizinho_Play");
                    $g5 = new Gafanhoto("Creosvalda Aparecida", 45, "F", "Creos_Diva");
                    $g6 = new Gafanhoto("Onofre da Silva", 55, "M", "Onofre_Troll");

                    // Criando 6 objetos Video
                    $v1 = new Video("Como fritar um ovo com estilo");
                    $v2 = new Video("Danças engraçadas para alegrar o dia");
                    $v3 = new Video("Aprenda a fazer memes hilários");
                    $v4 = new Video("10 pegadinhas épicas com seu amigo");
                    $v5 = new Video("Receitas de bolo para iniciantes");
                    $v6 = new Video("Como construir uma casa na árvore");

                    // Criando 6 objetos AssistirVideo
                    $av1 = new AssistirVideo($g1, $v1);
                    $av2 = new AssistirVideo($g2, $v2);
                    $av3 = new AssistirVideo($g3, $v3);
                    $av4 = new AssistirVideo($g4, $v4);
                    $av5 = new AssistirVideo($g5, $v5);
                    $av6 = new AssistirVideo($g6, $v6);

                    echo "<hr>";
                    echo "<h3>Simulações Detalhadas:</h3>";

                    // Simulações de interações mais complexas
                    echo "<br>Simulação 1: Juju_Memezeira assiste vários vídeos e ganha experiência.<br>";
                    $av1_2 = new AssistirVideo($g1, $v2);
                    $av1_3 = new AssistirVideo($g1, $v3);
                    $av1_4 = new AssistirVideo($g1, $v4);
                    $g1->exibirInfo();

                    echo "<br>Simulação 2: Cleitinho_Paz_e_Amor assiste e pausa um vídeo.<br>";
                    $av2->pausar();
                    $g2->exibirInfo();

                    echo "<br>Simulação 3: Vovó_Gamer dá like em um vídeo.<br>";
                    $v3->receberLike();
                    echo "Vídeo '" . $v3->getTitulo() . "' agora tem " . $v3->getCurtidas() . " likes.<br>";

                    echo "<br>Simulação 4: Valdizinho_Play assiste vários vídeos e ganha experiência.<br>";
                    $av4_2 = new AssistirVideo($g4, $v5);
                    $av4_3 = new AssistirVideo($g4, $v6);
                    $g4->exibirInfo();

                    echo "<br>Simulação 5: Creos_Diva assiste e pausa um vídeo.<br>";
                    $av5->pausar();
                    $g5->exibirInfo();

                    echo "<br>Simulação 6: Onofre_Troll dá like em um vídeo.<br>";
                    $v6->receberLike();
                    echo "Vídeo '" . $v6->getTitulo() . "' agora tem " . $v6->getCurtidas() . " likes.<br>";

                    echo "<hr>";

                    // Exibindo informações finais
                    echo "<h3>Informações Finais:</h3>";

                    echo "<br>Gafanhotos:<br>";
                    $g1->exibirInfo();
                    $g2->exibirInfo();
                    $g3->exibirInfo();
                    $g4->exibirInfo();
                    $g5->exibirInfo();
                    $g6->exibirInfo();

                    echo "<br>Vídeos:<br>";
                    echo "Título: " . $v1->getTitulo() . ", Views: " . $v1->getViews() . ", Curtidas: " . $v1->getCurtidas() . "<br>";
                    echo "Título: " . $v2->getTitulo() . ", Views: " . $v2->getViews() . ", Curtidas: " . $v2->getCurtidas() . "<br>";
                    echo "Título: " . $v3->getTitulo() . ", Views: " . $v3->getViews() . ", Curtidas: " . $v3->getCurtidas() . "<br>";
                    echo "Título: " . $v4->getTitulo() . ", Views: " . $v4->getViews() . ", Curtidas: " . $v4->getCurtidas() . "<br>";
                    echo "Título: " . $v5->getTitulo() . ", Views: " . $v5->getViews() . ", Curtidas: " . $v5->getCurtidas() . "<br>";
                    echo "Título: " . $v6->getTitulo() . ", Views: " . $v6->getViews() . ", Curtidas: " . $v6->getCurtidas() . "<br>";

                    ?>
                </p>
            </div>
        </section>
    </main>
</body>

</html>