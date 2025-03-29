<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova página</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Inclui a classe Caneta, que deve estar no arquivo "Caneta.php"
        require_once "Caneta.php"; 

        // Criando um objeto da classe Caneta
        // Aqui estamos criando uma nova instância da classe Caneta e atribuindo a ela o nome $minhaCaneta
        $minhaCaneta = new Caneta();

        // Atribuindo valores aos atributos da classe Caneta
        // Esses valores são específicos para essa instância da caneta, ou seja, não afetam outras canetas
        $minhaCaneta->modelo = "BIC Cristal";  // Definindo o modelo da caneta
        $minhaCaneta->cor = "Azul";            // Definindo a cor da caneta
        $minhaCaneta->ponta = 0.7;             // Definindo a espessura da ponta da caneta
        $minhaCaneta->carga = "70";            // Definindo o nível de carga da caneta (em porcentagem)
        $minhaCaneta->tampada = false;         // Atribuindo se a caneta está tampada ou não (false significa que está destampada)

        // Exibindo as informações da caneta
        // Aqui você chama o método "mostrarInfo" da classe Caneta, que deve exibir as propriedades do objeto
        $minhaCaneta->mostrarInfo();

        // Testando os métodos da classe Caneta

        // Chamando o método rabiscar para ver o que acontece quando tentamos rabiscar a caneta
        $minhaCaneta->rabiscar();  // Tentando rabiscar a caneta
        
        // Chamando o método tampar para tampar a caneta
        $minhaCaneta->tampar();    // Tampar a caneta, então ela não pode mais rabiscar
        
        // Chamando o método rabiscar novamente para testar se vai funcionar depois de tampar a caneta
        $minhaCaneta->rabiscar();  // Tentando rabiscar novamente (não deve funcionar, pois a caneta está tampada)
        
        // Chamando o método destampar para ver se conseguimos rabiscar depois de destampar a caneta
        $minhaCaneta->destampar(); // Destampando a caneta para poder rabiscá-la novamente
        
        // Chamando o método rabiscar após destampar
        $minhaCaneta->rabiscar();  // Agora sim, deve funcionar, já que a caneta está destampada

        // Exibindo a estrutura completa do objeto $minhaCaneta
        // A função var_dump imprime todos os valores e tipos da variável, no caso, todas as propriedades da caneta
        var_dump($minhaCaneta);

        // Agora criando outra caneta chamada $canetaDoAmigo
        // Seguindo o mesmo processo, mas com valores diferentes
        $canetaDoAmigo = new Caneta();
        $canetaDoAmigo->modelo = "Pentel Classic";  // Modelo diferente para o amigo
        $canetaDoAmigo->cor = "Grafite";            // Cor diferente
        $canetaDoAmigo->carga = 70;                 // Mesma carga, mas com outro valor
        $canetaDoAmigo->ponta = 2.0;                // Ponta mais grossa
        $canetaDoAmigo->tampada = true;             // A caneta do amigo está tampada

        // Exibindo as propriedades da caneta do amigo
        var_dump($canetaDoAmigo);
    ?>
    <p>Nos livramos da maldição!!!</p>
</body>
</html>
