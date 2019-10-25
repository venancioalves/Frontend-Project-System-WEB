<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Fornecedor</title>

    <script src="https://kit.fontawesome.com/e8d8642a0f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/favicon.png">
    <link href="styles/style_cadastrar_clientes.css" rel="stylesheet">

</head>
<body>
    
        <?php
            
            include 'navbar.php';

        ?>

        
               
    
        </div>

        <div id="principal">
            <form action="" method="POST">

                <fieldset class="gerais">

                    <legend>Dados Gerais do Fornecedor</legend>

                    <div>
                        <label>Nome do fornecedor: </label>
                        <input type="text" name="name" class="campo-grande" />
                    </div>
    
                    <div>
                        <div class="medio-esquerda">
                            <label >CNPJ: </label>
                            <input type="text" name="cnpj" class="campo-medio">
                        </div>
    
                        <div class="medio-esquerda">
                            <label >Inscrição Estadual: </label>
                            <input type="text" name="ie" class="campo-medio">
                        </div>
                    </div>        
                                       

                </fieldset>

                <fieldset class="gerais">

                        <legend>Endereço</legend>
                        
                        <div>
                            <div class="medio-esquerda">
                                <label >Endereço: </label>
                                <input type="text" name="esndereco" class="campo-grande">
                            </div>

                            <div class="medio-esquerda">
                                <label >Número: </label>
                                <input type="text" name="numero" id="campo-pequeno">
                            </div>
                        </div>

                        <div>
                                <div class="medio-esquerda">
                                        <label>Estado: </label>
                                        <select name="estado" class="selects"> 
                                            <option value="estado">Selecione o Estado</option> 
                                            <option value="ac">Acre</option> 
                                            <option value="al">Alagoas</option> 
                                            <option value="am">Amazonas</option> 
                                            <option value="ap">Amapá</option> 
                                            <option value="ba">Bahia</option> 
                                            <option value="ce">Ceará</option> 
                                            <option value="df">Distrito Federal</option> 
                                            <option value="es">Espírito Santo</option> 
                                            <option value="go">Goiás</option> 
                                            <option value="ma">Maranhão</option> 
                                            <option value="mt">Mato Grosso</option> 
                                            <option value="ms">Mato Grosso do Sul</option> 
                                            <option value="mg">Minas Gerais</option> 
                                            <option value="pa">Pará</option> 
                                            <option value="pb">Paraíba</option> 
                                            <option value="pr">Paraná</option> 
                                            <option value="pe">Pernambuco</option> 
                                            <option value="pi">Piauí</option> 
                                            <option value="rj">Rio de Janeiro</option> 
                                            <option value="rn">Rio Grande do Norte</option> 
                                            <option value="ro">Rondônia</option> 
                                            <option value="rs">Rio Grande do Sul</option> 
                                            <option value="rr">Roraima</option> 
                                            <option value="sc">Santa Catarina</option> 
                                            <option value="se">Sergipe</option> 
                                            <option value="sp">São Paulo</option> 
                                            <option value="to">Tocantins</option> 
                                        </select>
                                    </div>

                                    <div class="medio-esquerda">
                                        <label >Cidade: </label>
                                        <input type="text" name="cidade" class="campo-medio">
                                    </div>
        
 
                        </div>
        
    
                                                

                </fieldset>


                <fieldset class="gerais">

                    <legend>Informações Adicionais</legend>

                    <div>
                        <label>Telefone: </label>
                        <input type="text" name="telefone" class="campo-medio">
                    </div>

                    <div>
                        <label name="observacoes">Observações: </label>
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
                        <p id="texto-botoes">Salvar Fornecedor</p>
                    </button>
                </div>
                
                
            </form>
    </div>

</body>
</html>