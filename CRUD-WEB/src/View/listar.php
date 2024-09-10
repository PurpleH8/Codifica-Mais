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
    <title>Listagem de produtos</title>
</head>

<body>

<div class="tudo">
    <h1 class="titulo_pagina">Buscar item</h1>
    <input type="text" placeholder="Buscar...">

    <?php foreach($produtos as $id => $produto): ?>

    <div class="item">
        <div class="item_cabecalho">

            <div>
                <span class="item_id">
                <?php echo $produto['id'] ?>
                        
                    
                    

                </span>
                <span class="item_tipo"><?php echo $produto['categoria']?>
            </span>
            </div>

            <div>
                <button class="botao botao_red"> <a onclick="return confirm('deletar?')"
                    href="/View/deletar?id=<?= $id ?>"> Deletar</button> </a>
            </div>

        </div>

        <div class="item_detalhes">
            <div>
                <span class="item_nome"><?php echo $produto['nome'] ?></span>
            </div>
            <div>
                <span class="item_sku"><?php echo $produto['sku'] ?></span>
                <span class="item_quantidade"><?php echo $produto['quantidade'] ?></span>
            </div>
        </div>
            <a href="/View/editar?id=<?= $id ?>"></a><button class="botao">Editar</button>
    </div>

        

        <div class="botaofinal">

            <a href="adicionar.php"><button class="botao">Novo Item</button></a>

            <a href="editar.php"><button class="botao">Atualizar</button></a>

        </div>
        
    </div>

    <?php endforeach; ?>
    <!-- Estrutura da página aqui -->

</body>
</html>