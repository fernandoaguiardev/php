<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula07 POO em php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Relacionamento entre classes</h1>
    <header>
        <p>class Lutador</p>
        <p>class Lutar</p>
        <p>luta->lutar(objeto lutador1, objeto lutador2);</p>

    </header>
    <main>
        <section>
            <div id="terminal">
                <h1>Terminal</h1>
                <p>
                    <?php
                    require_once "main.php";

                    $lutadores = [
                        new Lutador("Pretty Boy", "Franca", 31, 1.75, 68.9, 11, 2, 1),
                        new Lutador("Putscript", "Brasil", 28, 1.68, 57.8, 14, 2, 3),
                        new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1),
                        new Lutador("Deadcode", "Australia", 28, 1.93, 81.6, 13, 0, 2),
                        new Lutador("Nerdaard", "Japão", 30, 1.81, 105.7, 12, 2, 4),
                        new Lutador("Ufocobol", "Marte", 35, 2.15, 105.7, 20, 5, 0)
                    ];

                    $luta1 = new Luta($lutadores[4], $lutadores[5]);
                    $luta1->marcarLuta();
                    $luta1->lutar();

                    ?>
                </p>
            </div>
        </section>
    </main>
</body>

</html>