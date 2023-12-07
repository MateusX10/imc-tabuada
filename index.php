<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <a href="http://localhost/CURSO_PHP/css/imc/index.php?"><button>Home</button></a>
    </header>
    
    <section>

        <div class="sidebar">
            <a href="http://localhost/CURSO_PHP/css/imc/index.php?pag=tabuada"><button>Tabuada</button></a>
            <a href="http://localhost/CURSO_PHP/css/imc/index.php?pag=imc"><button>Calcular IMC</button></a>
        </div>
        <div class="content">

            <?php

            /* obtém o conteúdo da variável pag que é definida a depender do botão em que o usuário clicou*/
            $conteudo_a_ser_exibido = ( isset($_GET['pag']) ) ? $_GET['pag'] : "";

            /* verifica o que será mostrado na tela (tabuada, imc, home)*/
            switch ($conteudo_a_ser_exibido){
                
                /* mostrar tabuada*/
                case "tabuada":
                    
                    include "tabuada.php";
                    break;
                
                /* calcular IMC*/
                case "imc":

                    include "imc.php";
                    break;

                /* voltar a homepage*/
                case "":

                    include "inicial.php";
                    break;
            }

            ?>

        </div>    
    </section>

    <footer>
        Footer
    </footer>


</body>
</html>