<?php

$estoque[] = [
    'codigo' => 1,
    'nome' => 'Camisa Polo',
    'tamanho' => 'P',
    'cor' => 'Branca',
    'quantidade' => 1
    ];

$estoque[] = [
        'codigo' => $codigo,
        'nome' => $nome,
        'tamanho' => $tamanho,
        'cor' =>$cor,
        'quantidade' => $quantidade
];
// Implemente aqui o código

function adicionarProduto(&$estoque, $codigo, $nome, $tamanho, $cor, $quantidade) {
     $estoque[] = [
        'codigo' => $codigo,
        'nome' => $nome,
        'tamanho' => $tamanho,
        'cor' =>$cor,
        'quantidade' => $quantidade
    ];
    echo'prouto adicioadaadnoandjusbigjs' . PHP_EOL;
}

function venderProduto(&$estoque, $codigo, $quantidadeRemover) {
                
}
function verificarEstoque($estoque, $codigo) {

}
function listarEstoque($estoque) {
    if (empty($estoque)) {
        echo 'estoque vazio' . PHP_EOL;
        return;
    }
    foreach ($estoque as $produto) {
        echo "codigo: " . $produto['codigo'] . 
        ", ";
    }
}
function verificarProduto($estoque, $codigo, $nome, $tamanho, $cor, $quantidade) {
     echo "Temos";
}
// Função para exibir o menu e obter a escolha do usuário
function exibirMenu()
{
    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1. Adicionar um produto 1\n";
    echo "2. Remover um produto 2\n";
    echo "3. Verificar Estoque 3\n";
    echo "4. Listar o Estoque 4\n";
    echo "5. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    return $opcao;
}

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $codigo = readline("Digite o Código do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $tamanho = readline("Digite o Tamanho: ");
            $cor = readline("Digite a Cor: ");
            $quantidade = readline("Digite a Quantidade: ");
            adicionarProduto($estoque, $codigo, $nome, $tamanho, $cor, $quantidade);
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