<?php
session_start();
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
            <input type="text" placeholder="Nome Item" class="nome_item">
        </div>

        <div class="coluna">

            <input type="text" placeholder="Sku" class="escrever_opcao">

            <label for="categoria_adicionar" class="escrever_opcao">
                <select name="categoria_adicionar" class="categoria_adicionar">
                    <option value="1">Un</option>
                    <option value="2">Kg</option>
                    <option value="3">G</option>
                    <option value="4">L</option>
                    <option value="5">Mm</option>
                    <option value="6">Cm</option>
                    <option value="7">M</option>
                    <option value="8">M²</option>
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
            </label>
        </div>

        

    </div>

    <div class="botaofinal">

        <button class="botao">CONFIRMAR</button>
        <a href="listagem.php"><button class="botao">Voltar</button></a>

    </div>
        
</div>
    
</body>
</html>