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
                    <?php foreach ($unidadeMedidas as $unidadeMedida) { ?>
                        <option
                        value="<?= $unidadeMedida['id'] ?>"
                        <?= ($produto['unidade_medida_id'] == $unidadeMedida['id'] ? 'selected' : '')?> >
                            <?= $unidadeMedida['nome'] ?>
                        </option>
                    <?php } ?>
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
                <?php foreach ($categorias as $categoria) { ?>
                        <option
                        value="<?= $categoria['id'] ?>"
                        <?= ($produto['unidade_medida_id'] == $categoria['id'] ? 'selected' : '')?> >
                            <?= $categoria['nome'] ?>
                        </option>
                    <?php } ?>
                </select>
            </label>
        </div>

        

    </div>

    <div class="botaofinal">

        <button class="botao">CONFIRMAR</button>
        <a href="listar"><button class="botao">Voltar</button></a>

    </div>
        
</div>
    
</body>
</html>