<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10 POO em php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Herança parte1</h1>
    <header>
        <p>class Pessoa</p>
        <p>class Aluno extende Pessoa</p>
        <p>class Funcionario extende Pessoa</p>
        <p>class Professor extende Pessoa</p>
    </header>
    <main>
        <section>
            <div id="terminal">
                <h1>Terminal</h1>
                <p>
                <?php

                    require_once "Pessoa.php";
                    require_once "Aluno.php";
                    require_once "Professor.php";
                    require_once "Funcionario.php";

                    // Criando um objeto de Aluno
                    $aluno = new Aluno("Carlos", 20, "Masculino", "12345", "Engenharia");

                    // Criando um objeto de Professor
                    $professor = new Professor("Dr. Silva", 45, "Masculino", "Matemática", 5000);

                    // Criando um objeto de Funcionario
                    $funcionario = new Funcionario("Maria", 38, "Feminino", true, "TI");

                    // Simulando ações
                    echo "---------------------\n";
                    echo "Aluno: " . $aluno->getNome() . ", Idade: " . $aluno->getIdade() . "\n";
                    $aluno->fazerAniversario();
                    echo "Matrícula: " . $aluno->getMatricula() . "\n";
                    echo "Curso: " . $aluno->getCurso() . "\n";
                    echo "---------------------\n";

                    echo "Professor: " . $professor->getNome() . ", Idade: " . $professor->getIdade() . "\n";
                    $professor->fazerAniversario();
                    echo "Especialidade: " . $professor->getEspecialidade() . "\n";
                    echo "Salário antes do aumento: R$ " . $professor->getSalario() . "\n";
                    $professor->receberAumento(10); // Aumento de 10%
                    echo "Salário após aumento: R$ " . $professor->getSalario() . "\n";
                    echo "---------------------\n";

                    echo "Funcionário: " . $funcionario->getNome() . ", Idade: " . $funcionario->getIdade() . "\n";
                    $funcionario->fazerAniversario();
                    echo "Trabalhando? " . ($funcionario->getTrabalhando() ? "Sim" : "Não") . "\n";
                    $funcionario->mudarTrabalho("Limpeza", false); // Funcionário deixa de trabalhar
                    echo "Trabalhando? " . ($funcionario->getTrabalhando() ? "Sim" : "Não") . "\n";
                    echo "Setor: " . $funcionario->getSetor() . "\n";
                    echo "---------------------\n";

                    ?>

                </p>
            </div>
        </section>
    </main>
</body>

</html>