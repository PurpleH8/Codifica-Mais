<?php


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listagem.css">
    <title>Editar Produto</title>
</head>

<body>

<div class="tudo">
        
    <h1 class="titulo_pagina">Editar</h1>
        
    <div class="colunas">
        <div class="coluna">
            <input type="text" value="<?php echo $produto['nome']?>" class="nome_item" name="nome">
        </div>

        <div class="coluna">

            <input type="text" value="<?php echo $produto['sku']?>" class="escrever_opcao" name="sku">

            <label for="unidade_medida" class="escrever_opcao">
                <select name="unidade_medida" class="categoria_adicionar">
                    <option value="1" <?php ($produto['unidade_medida_id'] == 1 ? 'selected' : '') ?>>Un</option>
                    <option value="2"<?php ($produto['unidade_medida_id'] == 2 ? 'selected' : '') ?>>Kg</option>
                    <option value="3"<?php ($produto['unidade_medida_id'] == 3 ? 'selected' : '') ?>>G</option>
                    <option value="4"<?php ($produto['unidade_medida_id'] == 4 ? 'selected' : '') ?>>L</option>
                    <option value="5"<?php ($produto['unidade_medida_id'] == 5 ? 'selected' : '') ?>>Mm</option>
                    <option value="6"<?php ($produto['unidade_medida_id'] == 6 ? 'selected' : '') ?>>Cm</option>
                    <option value="7"<?php ($produto['unidade_medida_id'] == 7 ? 'selected' : '') ?>>M</option>
                    <option value="8"<?php ($produto['unidade_medida_id'] == 8 ? 'selected' : '') ?>>M²</option>
                </select>
            </label>
        </div>

        <div class="coluna">

            <input type="text" value="<?php echo $produto['valor']?>" class="escrever_opcao" name="valor">

            <input type="text" value="<?php echo $produto['quantidade']?>" class="escrever_opcao" name="quantidade">

        </div>
        <!--sinto que essas categorias são inúteis-->
        <div class="coluna">

            <label type="text" placeholder="Categoria" class="escrever_opcao">
                <select name="categoria_adicionar" class="categoria_adicionar">
                    <option value="1">Eletrônicos</option>
                    <option value="2">Eletrodomésticos</option>
                    <option value="3">Móveis</option>
                    <option value="4">Decorações</option>
                    <option value="5">Vestuários</option>
                    <option value="6">Outros</option>
                </select>
            </label>
        </div>

        

    </div>

    <div class="botaofinal">

        <button class="botao">CONFIRMAR</button>
        <a href="listar.php"><button class="botao">Voltar</button></a>

    </div>
        
</div>
    
</body>
</html>