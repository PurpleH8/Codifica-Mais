<?php

require_once 'produto.php';
require_once 'ProdutoPerecivel.php';
require_once 'estoque.php';

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

$estoque = new Estoque();

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $sku = readline("Digite o Código do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $cor = readline('Qual a cor do produto? ');
            $preco = readline('Qual o preço?: ');
            $quantidade = readline("Digite a Quantidade: ");
            $dataValidade = readline("Digite a Data de Validade (YYYY-MM-DD): ");
            
            $produto = new ProdutoPerecivel($sku, $nome, $preco, $quantidade, $dataValidade, $cor);

            $estoque->adicionarProduto($produto);
            echo "Produto adicionado com sucesso." . PHP_EOL . PHP_EOL . '========================================================================' . PHP_EOL;
            

            
            break;
        case 2:
            echo "Remover um produto\n";
            // Implemente aqui o código para a opção 2
            $sku = readline("Digite o código do produto: ");
            $quantidade = readline("Digite a quantidade: ");
            $estoque->venderProduto($sku, $quantidade);
            





            break;
        case 3:
            echo "Verificar Estoque\n";
            // Implemente aqui o código para a opção 3

            $sku = readline("Digite o código do produto");

            $produto = $estoque->produtos[$sku] ?? null;
            if ($produto) {
                echo "Código: " . $produto->getSku() . PHP_EOL . "Nome: " . $produto->getNome() . PHP_EOL . "Preço: " . $produto->getPreco() . PHP_EOL . "Quantidade: " . $produto->getQuantidade() . PHP_EOL . PHP_EOL . PHP_EOL . '========================================================================' . PHP_EOL;
            } else {
                echo "O produto não foi encontrado." . PHP_EOL . PHP_EOL . '========================================================================';
            }




            break;
        case 4:
            echo "Listar o Estoque\n";
            // Implemente aqui o código para a opção 4
            $estoque->listarProdutos();





            break;
        case 5:
            echo "Saindo..." . PHP_EOL;
            exit; // Sai do loop e encerra o script
        default:
            echo "Opção inválida, por favor tente novamente." . PHP_EOL;
            break;
    }
}

