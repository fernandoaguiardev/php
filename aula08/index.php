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
        <p>class Livro</p>
        <p>class Pessoa</p>
    </header>
    <main>
        <section>
            <div id="terminal">
                <h1>Terminal</h1>
                <p>
                    <?php
                    require_once "main.php";

                    // Exemplo de uso:
                    $livro = new Livro("Código Limpo", "Robert C. Martin", 464);
                    $pessoa = new Pessoa("Fernando", 25, "M");
                    $leitura = new LerLivro($livro, $pessoa);

                    $livro->abrir();
                    $livro->folhear(100);
                    $livro->avancarPagina();
                    $livro->voltarPagina();
                    $livro->fechar();

                    // Exibir informações
                    echo "Título: " . $livro->getTitulo() . "\n";
                    echo "Autor: " . $livro->getAutor() . "\n";
                    echo "Total de Páginas: " . $livro->getTotPaginas() . "\n";
                    echo "Página Atual: " . $livro->getPagAtual() . "\n";
                    echo "Está aberto? " . ($livro->getIsOpen() ? "Sim" : "Não") . "\n";

                    ?>
                </p>
            </div>
        </section>
    </main>
</body>

</html>