<p?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<hea>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listagem.css">
    <title>Listagem de produtos</title>
</head>

<body>

    <div class="tudo">
        <h1 class="buscar_item">Buscar item</h1>
        <input type="text" placeholder="Buscar...">

        <div class="item">
            <div class="item_cabecalho">

                <div>
                    <span class="item_id">#000001</span>
                    <span class="item_tipo">vestuário</span>
                </div>

                <div>
                    <button class="botao botao_red">Deletar</button>
                </div>

            </div>

            <div class="item_detalhes">
                <div>
                    <span class="item_nome">Camisa codifica+</span>
                </div>
                <div>
                    <span class="item_sku">SKU: 123456</span>
                    <span class="item_quantidade">Quantidade: 100</span>
                </div>
            </div>
            <button class="botao">Editar</button>
        </div>

        <div class="item">
            <div class="item_cabecalho">
                <div>
                    <span class="item_id">#000002</span>
                    <span class="item_tipo">eletrônico</span>
                </div>
                <div>
                    <button class="botao botao_red">Deletar</button>
                </div>
            </div>
            <div class="item_detalhes">
                <div>
                    <span class="item_nome">Notebook</span>
                </div>
                <div>
                    <span class="item_sku">SKU: 123456</span>
                    <span class="item_quantidade">Quantidade: 45</span>
                </div>
            </div>
            <button class="botao">Editar</button>
        </div>

        <div class="item">
            <div class="item_cabecalho">
                <div>
                    <span class="item_id">#000003</span>
                    <span class="item_tipo">escritório</span>
                </div>
                <div>
                    <button class="botao botao_red">Deletar</button>
                </div>
            </div>
            <div class="item_detalhes">
                <div>
                    <span class="item_nome">Caderno Anotação</span>
                </div>
                <div>
                    <span class="item_sku">SKU: 123456</span>
                    <span class="item_quantidade">Quantidade: 15</span>
                </div>
            </div>
            <button class="botao">Editar</button>
        </div>

        <button class="botao">Novo Item</button>
    </div>

    
    <!-- Estrutura da página aqui -->

</body>
</html>