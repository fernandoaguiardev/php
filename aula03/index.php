<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova página</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Modificadores de visibilidade</h1>
    <header>
        <p>+ Public</p>
        <p>- Private</p>
        <p># Protected</p>
    </header>
    <main>
        <section id="terminal">
        <h1>Terminal</h1>
        <p>
        <?php 
        require_once "Caneta.php";

        $minhaCaneta = new Caneta("BIC Crystal", "Amarela", 0.3);
        $minhaCaneta->destampar();
        $minhaCaneta->escrever();
        $minhaCaneta->tampar();
        $minhaCaneta->escrever();
        $minhaCaneta->imprimirPropriedades();
       
    ?>
        </p>
        </section>
    </main>
</body>
</html>
