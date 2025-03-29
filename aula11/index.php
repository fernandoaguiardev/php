<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula11 POO em php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Herança parte2</h1>
    <header>
        <p>class Pessoa</p>
        <p>class Aluno extende Pessoa</p>
        <p>class Bolsista extende Aluno</p>
        <p>class Visitante extende Pessoa</p>
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
                    require_once "Bolsista.php";
                    require_once "Visitante.php";

                    // Criando um objeto de Aluno
                    $aluno = new Aluno("Carlos", 20, "Masculino", "12345", "Engenharia");

                    // Criando um objeto de Professor
                    $professor = new Professor("Dr. Silva", 45, "Masculino", "Matemática", 5000);

                    // Criando um objeto de Funcionario
                    $funcionario = new Funcionario("Maria", 38, "Feminino", true, "TI");

                    // Criando um objeto de Visitante
                    $visitante = new Visitante("João", 30, "Masculino");

                    // Simulando ações
                    echo "---------------------<br>";
                    echo "Aluno: " . $aluno->getNome() . ", Idade: " . $aluno->getIdade() . "<br>";
                    $aluno->fazerAniversario();
                    echo "Matrícula: " . $aluno->getMatricula() . "<br>";
                    echo "Curso: " . $aluno->getCurso() . "<br>";
                    echo "---------------------<br>";

                    echo "Professor: " . $professor->getNome() . ", Idade: " . $professor->getIdade() . "<br>";
                    $professor->fazerAniversario();
                    echo "Especialidade: " . $professor->getEspecialidade() . "<br>";
                    echo "Salário antes do aumento: R$ " . $professor->getSalario() . "<br>";
                    $professor->receberAumento(10); // Aumento de 10%
                    echo "Salário após aumento: R$ " . $professor->getSalario() . "<br>";
                    echo "---------------------<br>";

                    echo "Funcionário: " . $funcionario->getNome() . ", Idade: " . $funcionario->getIdade() . "<br>";
                    $funcionario->fazerAniversario();
                    echo "Trabalhando? " . ($funcionario->getTrabalhando() ? "Sim" : "Não") . "<br>";
                    $funcionario->mudarTrabalho("Limpeza", false); // Funcionário deixa de trabalhar
                    echo "Trabalhando? " . ($funcionario->getTrabalhando() ? "Sim" : "Não") . "<br>";
                    echo "Setor: " . $funcionario->getSetor() . "<br>";
                    echo "---------------------<br>";

                    echo "Visitante: " . $visitante->getNome() . ", Idade: " . $visitante->getIdade() . "<br>";
                    $visitante->fazerAniversario();
                    echo "<br>---------------------<br>";

                    ?>
                </p>
            </div>
        </section>
    </main>
</body>

</html>