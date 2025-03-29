<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05 POO em php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Exemplo de classe: Conta banco</h1>
    <header>

    </header>
    <main>
        <section>
            <div id="terminal">
                <h1>Terminal</h1>
                <p>
                    <?php
                    require_once "Class.php";

                    $pessoa = new Owner("Maria Julia", 32, 'F');
                    $conta = new BankAccount(987654321, "CC", $pessoa, 56520, true);
                    $conta->displayAccountInfo();
                    $conta->depositar(200);
                    $conta->closeAccount();
                    $conta->displayAccountInfo();
                    $conta->sacar(56720);
                    $conta->closeAccount();
                    $conta->displayAccountInfo();

                    ?>
                </p>
            </div>
        </section>
    </main>
</body>

</html>