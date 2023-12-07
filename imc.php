<?php


/*verifica se ocorreu um envio de dados de formulário por meio do método "post"*/
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    /* obtém os valores nome, peso  e altura do formuçário*/
    $nome =  ( isset($_POST["nome"]) ) ? $_POST["nome"] : "";

    $peso = ( isset($_POST["peso"])) ? $_POST["peso"] : "0";

    $altura = ( isset($_POST["altura"])) ? $_POST["altura"] : "0";

    /* valores peso e altura são iguais a 0, logo erro.*/
    if ($peso == 0 || $altura == 0){
        echo "opção inválida";
    }

    else{

    
    /* calcula o IMC*/
    $imc = $peso / ($altura ** 2);
    
    /* formata o IMC como tendo 2 casas decimais após a vírgula*/
    $imc = number_format($imc, 2);

    /* verifica o estado de saúde do usuário*/

    /* abaixo do peso*/
    if ($imc < 18.5){
        $mensagem = "você está abaixo do peso";
    }

    /* peso normal*/
    elseif ($imc <= 24.9){

        $mensagem = "Você está com peso normal";
        
    }

    /* sobrepeso */
    elseif($imc <= 29.9){

        $mensagem = "Você está com sobrepeso";
    }

    /* obesidade grau I*/
    elseif($imc <= 34.9){
        $mensagem = "Você está com obesidade grau I (leve)";
    }

    /* obesidade grau II*/
    elseif($imc <= 39.9){
        $mensagem = "Você está com obesidade grau II (moderada)";
    }

    /*  obesidade grau III*/
    elseif ($imc >= 40){
        $mensagem = "Você está com obesidade grau III (grave)";
    }

    /* mostra na tela o IMC do usuário e a sua condição de saúde*/
    echo "$nome, seu IMC é $imc <br>";
    echo $mensagem;

}

}

/* nenhum formulário foi enviado, o usuário vai informar os dados agora*/
else{

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="http://localhost/CURSO_PHP/css/imc/index.php?pag=imc">
        <label for="nome">Nome:</label>

            <input type="text" placeholder="digite seu nome" name="nome" id="nome" required>

        <label for="peso">Peso:</label>

            <input type="number" placeholder="digite seu peso" name="peso" id="peso" step="0.01" required>

        <label for="altura">Altura</label>

            <input type="number" placeholder="digite sua altura" name="altura" id="altura" step="0.01" required>
        
        <input type="text" name="pag" value="imc" hidden>

        <input type="submit" value="calcular" style="margin-left: 300px; margin-top: 30px;">
    </form>

    
</body>
</html>


<?php

    }

?>