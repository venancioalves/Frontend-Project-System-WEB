<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Fornecedores</title>
    <script src="https://kit.fontawesome.com/e8d8642a0f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/favicon.png">
    <link href="styles/style_cadastros.css" rel="stylesheet">
    

</head>
<body>

        <?php
            
            include 'navbar.php';

        ?>


        <div class="div_produtos">
            
            <div id="buscar">
                
                <div id="caixa_busca">
                    <input type="text" id="txt_buscar" placeholder="Buscar por nome do fornecedor ou código">
                    <button type="submit" id="botao_pesquisa">
                            <i class="fas fa-search"></i>
                    </button>
                </div>

                <button class="botoes">
                    <a id="nome_botao" href="cadastrar_fornecedor.php">Adicionar Fornecedor</a>
                </button>

            </div>

            <div id="listar_clientes">

            </div>

        </div>
    
</body>
</html>