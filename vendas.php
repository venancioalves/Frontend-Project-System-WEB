<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendas</title>

    <script src="https://kit.fontawesome.com/e8d8642a0f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/favicon.png">
    <link href="styles/style_vendas.css" rel="stylesheet">
</head>
<body>
    
        <?php
            
            include 'navbar.php';

        ?>



        <div id="principal">

            <div id="buscar-produtos">

                    <div id="buscar">
                
                            <div id="caixa_busca">
                                <input type="text" id="txt_buscar" placeholder="Buscar nome do produto ou código">
                                <button type="submit" id="botao_pesquisa">
                                        <i class="fas fa-search"></i>
                                </button>
                            </div>

                            <div class="img-busca">
                                <img src="imagens/logo_85_transparente.png" alt="some text" width=400 height=450>
                            </div>

            
                        </div>

            </div>

            <div id="itens-venda">

                <div id="linha-topo">
                    <a href="" id="text-topo-vendas">Venda: #1</a>

                    <button id="botao-definir-cliente">
                        <a href="" id="text-definir-cliente">Selecionar Cliente</a>
                    </button>

                </div>


            </div>
            
            <button id="botao-finalizar">
                <a href="" id="texto-botao-finalizar">Finalizar Venda</a>
                <a href="" id="valor-botao-finalizar">R$ 000,00</a>
            </button>

        </div>
    
</body>
</html>