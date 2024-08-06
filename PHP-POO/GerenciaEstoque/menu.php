<?php

require_once 'produto.php';
function exibirMenu() {
    echo PHP_EOL;
    echo "Escolha uma das opções abaixo: " . PHP_EOL;
    echo "1. Adicionar um produto 1 " . PHP_EOL;
    echo "2. Vender um produto 2 " . PHP_EOL;
    echo "3. Verificar Estoque 3 " . PHP_EOL;
    echo "4. Listar o Estoque 4 " . PHP_EOL;
    echo "5. Sair " . PHP_EOL;
    $opcao = readline("Digite a sua escolha: ");
    return $opcao;
}

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $estoque = readline('Qual o nome do estoque? ');
            $sku = readline("Digite o Código do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $unidadeMedida = readline("Digite os Quilos ou Litros: ");
            $preco = readline('Qual o preço?: ');
            $quantidade = readline("Digite a Quantidade: ");
            $cor = readline("Digite a Cor: ");
            
            $produtoum = new Produto($estoque, $sku, $nome, $unidadeMedida, $preco, $quantidade, $cor);
            

            
            break;
        case 2:
            echo "Remover um produto\n";
            // Implemente aqui o código para a opção 2
            $codigo = readline("Digite o código do produto: ");
            $quantidade = readline("Digite a quantidade: ");
            venderProduto($estoque, $codigo, $quantidade);
            break;
        case 3:
            echo "Verificar Estoque\n";
            // Implemente aqui o código para a opção 3

            $codigo = readline("Digite o código do produto");
            break;
        case 4:
            echo "Listar o Estoque\n";
            // Implemente aqui o código para a opção 4
            listarEstoque($estoque);
            break;
        case 5:
            echo "Saindo...\n";
            exit; // Sai do loop e encerra o script
        default:
            echo "Opção inválida, por favor tente novamente.\n";
            break;
    }
}

