<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula04 POO em php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Métodos Especiais</h1>
    <header>
        <p>Getters (obtem os valores das propriedas)</p>
        <p>Setters (seta os valores das propriedades)</p>
        <p>Construtor</p>
    </header>
    <main>
        <section>
            <div id="terminal">
                <h1>Terminal</h1>
                <p>
                    <?php
                    require_once "Caneta.php";

                    
                    // Teste
                    $caneta1 = new Caneta(); // Usa valores padrão
                    $caneta2 = new Caneta("BIC", "Preta", 1.0, false); // Usa valores passados

                    $caneta1->imprimirPropriedades();
                    echo "<br>";
                    $caneta2->imprimirPropriedades();
                    echo "<br>";
                    $caneta2->setModelo("BIC Crystal");
                    $caneta2->setCor("Vermelha");
                    $caneta2->imprimirPropriedades();
                    
                    ?>
                </p>
            </div>
        </section>
    </main>
</body>

</html>