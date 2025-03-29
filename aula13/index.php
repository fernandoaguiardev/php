<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula13 POO em php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Polimorfismo parte2</h1>
    <header>
        <p>Métodos com mesmo nome mas com ações diferentes</p>
        <p>Polimorfismo de sobrecarga (mesma classe, assinaturas diferentes)</p>
        <p>O PHP não suporta Polimorfismo de sobrecarga. O prof. Guanabara recomenda que apenas crie métodos diferentes...</p>
    </header>
    <main>
        <section>
            <div id="terminal">
                <h1>Terminal</h1>
                <p>
                    <?php

                    require_once "main.php";

                    // Criando objetos para cada classe instanciável
                    echo "<br>Exemplos de uso:<br>";

                    $canguru = new Canguru(25, 3, 4, "Marrom");
                    $canguru->locomoverSe();

                    echo "<br>";
                    $cachorro = new Cachorro(10, 5, 4, "Preto");
                    $cachorro->emitirSom();
                    $cachorro->locomoverSe();

                    echo "<br>";
                    $cobra = new Cobra(3, 2, 0, "Verde");
                    $cobra->locomoverSe();
                    $cobra->emitirSom();

                    echo "<br>";
                    $tartaruga = new Tartaruga(15, 80, 4, "Marrom");
                    $tartaruga->locomoverSe();
                    $tartaruga->alimentarSe();

                    echo "<br>";
                    $goldfish = new Goldfish(0.2, 1, 0, "Dourado");
                    $goldfish->alimentarSe();
                    $goldfish->soltarBolha();

                    echo "<br>";
                    $arara = new Arara(1.5, 4, 2, "Azul");
                    $arara->emitirSom();
                    $arara->fazerNinho();

                    ?>
                </p>
            </div>
        </section>
    </main>
</body>

</html>