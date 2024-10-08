

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listagem.css">
    <title>Adicionar produto</title>
</head>


<body>
    
    <div class="tudo">
        
        <h1 class="titulo_pagina">Novo Item</h1>
        
        <div class="colunas">
            <div class="coluna">
                <input type="text" placeholder="Nome Item" class="nome_item">
            </div>

            <div class="coluna">

                <input type="text" placeholder="Sku" class="escrever_opcao">

                <label for="categoria_adicionar" class="escrever_opcao">

                    <select name="categoria_adicionar" class="categoria_adicionar">
                        <?php foreach ($unidadeMedidas as $unidadeMedida) { ?>
                            <option value="<?= $unidadeMedida['id'] ?>"><?= $unidadeMedida['nome'] ?></option>
                        <?php } ?>
                    </select>
                </label>
            </div>

            <div class="coluna">

                <input type="text" placeholder="Valor" class="escrever_opcao">

                <input type="text" placeholder="Quantidade" class="escrever_opcao">

        </div>

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

        </div>

        

        </div>  

        <div class="botaofinal">

            <button class="botao">CONFIRMAR</button>

            <a href="listar">
                <button class="botao">Voltar</button>
            </a>

        </div>
        
        
    </div>

</body>
</html>
