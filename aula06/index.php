<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula06 POO em php [Encapsulamento]</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Encapsulamento</h1>
    <header>

    </header>
    <main>
        <section>
            <div id="terminal">
                <h1>Terminal</h1>
                <p>
                    <?php
                    require_once "main.php";

                    $controle = new ControleRemoto();
                    $controle->setLigado();
                    $controle->aumentarVolume();
                    $controle->diminuirVolume();
                    $controle->playPause();
                    $controle->ativarMudo();
                    $controle->desativarMudo();
                    $controle->abrirMenu();

                    ?>
                </p>
            </div>
        </section>
    </main>
</body>

</html>