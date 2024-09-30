<?php

class Estoque {
    public $produtos = [];

    public function adicionarProduto($produto) {
        $this->produtos[$produto->getSku()] = $produto;
    }




    public function venderProduto($sku, $quantidade) {
        if (isset($this->produtos[$sku])) {
            $produto = $this->produtos[$sku];
            if ($produto->getQuantidade() >= $quantidade) {
                $produto->setQuantidade($produto->getQuantidade() - $quantidade);
                echo "Venda feita com sucesso. " . PHP_EOL . PHP_EOL . "========================================================================" . PHP_EOL;
            } else {
                echo "Quantidade insuficiente no estoque. " . PHP_EOL . PHP_EOL . "========================================================================" . PHP_EOL;
            }
        } else {
            echo "O produto não foi encontrado." . PHP_EOL . PHP_EOL . "========================================================================" . PHP_EOL;
        }
    }



    public function listarProdutos() {
        foreach ($this->produtos as $produto) {
            echo "Código: " . $produto->getSku() . PHP_EOL;
            echo "Nome: " . $produto->getNome() . PHP_EOL;
            echo "Preço: " . $produto->getPreco() . PHP_EOL;
            echo "Quantidade: " . $produto->getQuantidade() . PHP_EOL;
            echo "Data de Validade: " . $produto->getDataValidade() . PHP_EOL;
            echo "Cor: " . $produto->getCor() . PHP_EOL;
            echo '========================================================================' . PHP_EOL;
        }
    }

    


   
}

