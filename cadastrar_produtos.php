<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Produto</title>

    <script src="https://kit.fontawesome.com/e8d8642a0f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/favicon.png">
    <link href="styles/style_cadastrar_produtos.css" rel="stylesheet">
</head>
<body>
    
        <?php
            
            include 'navbar.php';

        ?>


       

    </div>

        <div id="principal">
                <form action="" method="POST">

                    <fieldset class="gerais">

                        <legend>Dados Gerais do Produto</legend>

                        <div>
                            <label>Nome do produto: </label>
                            <input type="text" name="name" class="campo-grande" />
                        </div>
        
                        <div>
                            <label >Fornecedor: </label>
                            <input type="text" name="fornecedor" class="campo-grande">
                        </div>

                        <div>
                            <label >Código de Barras: </label>
                            <input type="text" name="codigo-de-barras" class="campo-medio">
                        </div>

                        <div>
                                <div id="medio-esquerda">
                                        <label >Preço de custo: </label>
                                        <input type="text" name="preco_custo" class="campo-medio">
                                </div> 

                                <div id="medio-esquerda">
                                        <label >Preço de venda: </label>
                                        <input type="text" name="preco-venda" class="campo-medio">
                                </div> 
                        </div>         
                                           

                    </fieldset>

                    <fieldset class="gerais">

                            <legend>Unidade de medida e estoque</legend>
    
                            <div>
                                    <label>Unidade de Medida</label>
                                    <select name="unidade" class="selects">
                                        <option value="nenhum">(selecione)</option>
                                        <option value="cx">CX - Caixa</option>
                                        <option value="cj">CJ - Conjunto</option>
                                        <option value="hr">HR - Hora</option>
                                        <option value="kg">KG - Kilo</option>
                                        <option value="lt">LT - Litro</option>
                                        <option value="pr">PR - Par</option>
                                        <option value="pt">PT - Pacote</option>
                                        <option value="pc">PC - Peça</option>
                                        <option value="un">UN - Unidade</option>
                                    </select>
                            </div>
            
                            <div>
                                        <div id="medio-esquerda">
                                            <label >Estoque: </label>
                                            <input type="text" name="estoque" class="campo-medio">
                                        </div>
                
                                        <div id="medio-esquerda">
                                            <label >Categoria: </label>
                                            <input type="text" name="Categoria" class="campo-medio">
                                        </div>
                            </div>                     
    
                    </fieldset>

                    <fieldset class="gerais">

                            <legend>Informações Fiscais</legend>
    
                            <div>
                                    <label>Situação Tributaria - ICMS</label>
                                    <select name="situacao-icms" class="selects">
                                        <option value="nenhum">(selecione)</option>
                                        <option value="tributado">Tributado</option>
                                        <option value="nao-tributado">Não Tributado</option>
                                    </select>
                            </div>
            
                            <div>
                                <label >NCM: </label>
                                <input type="text" name="ncm" class="campo-medio">
                            </div>
    
                            <div>
                                <label >Alíquota ICMS: </label>
                                <input type="text" name="icms" class="campo-medio">
                            </div>  
                            
                            <div>
                                <label>Situação Tributaria - IPI</label>
                                <select name="situacao-ipi" class="selects">
                                    <option value="nenhum">(selecione)</option>
                                    <option value="tributado">Tributado</option>
                                    <option value="nao-tributado">Não Tributado</option>
                                </select>
                            </div>

                            <div>
                                <label >Alíquota IPI: </label>
                                <input type="text" name="ipi" class="campo-medio">
                            </div> 
    
                    </fieldset>

                    <fieldset class="gerais">

                        <legend>Informações Adicionais</legend>
                        <div>
                            <label name="observacoes">Observações</label>
                            <input type="text" name="observacoes" id="campo-observacoes">
                        </div>
                    </fieldset>

                    <div id="div-botoes">
                        <button type="reset" id="botao-reset" >
                            <p id="texto-botoes">Limpar Campos</p>
                        </button>

                        <button type="submit" id="botao-salvar-adicionar">
                            <p id="texto-botoes">Salvar e adicionar outro</p>
                        </button>

                        <button type="submit" id="botao-salvar">
                            <p id="texto-botoes">Salvar Produto</p>
                        </button>
                    </div>
                    
                    
                </form>
        </div>

</body>
</html>