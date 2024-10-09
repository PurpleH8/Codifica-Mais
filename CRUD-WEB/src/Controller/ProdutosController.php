<?php


namespace App\Controller;

use App\ConexaoBD;
use PDO;


class ProdutosController 

{
    private $pdo;

    public function __construct() 
    {
        $this->pdo = ConexaoBD::createConnection();
    }
    public function listar()
    {     
        $sql = 'SELECT * FROM produto';
        
        $banco = $this->pdo->query($sql);
        
        $produtos = $banco->fetchAll(PDO::FETCH_ASSOC);
        
        require __DIR__ . '/../View/listar.php';
      //use estoque;
    }


    

     public function editar() {
        $itemId = $_GET['id'];
       
 
        //fazer consulta no banco de dados buscando o item pelo id
        //sqls
        $sql = 'SELECT * FROM produto where id = ' . $itemId;
        $sql2 = 'SELECT * FROM unidade_medida';
        $sql3 = 'SELECT * FROM categoria';
        //bancos
        $banco = $this->pdo->query($sql);
        $banco2 = $this->pdo->query($sql2);
        $banco3 = $this->pdo->query($sql3);
        //quem usará os bancos
        $produto = $banco->fetch(PDO::FETCH_ASSOC);
        $unidadeMedidas = $banco2->fetchAll(PDO::FETCH_ASSOC);
        $categorias = $banco3->fetchAll(PDO::FETCH_ASSOC);
        //dd($produto);
        //salvar o item retornado  no banco de dados em uma variavel
        require __DIR__ . "/../View/editar.php";
    }
    public function criar() {
        //sqls
        $sql = 'SELECT * FROM unidade_medida'; 
        $sql2 = '';
        //bancos
        $banco = $this->pdo->query($sql);
        //qm usará os bancos
        $unidadeMedidas = $banco->fetchAll(PDO::FETCH_ASSOC);
        
        require __DIR__ . "/../View/adicionar.php";
    }
    public function deletar() {
        $itemId = $_GET['id'];

        $sql = 'DELETE * FROM produto where id = ?' . $itemId;
        $banco = $this->pdo->query($sql);
        $banco->bindvalue(1,$itemId);
        $banco->execute();


        require __DIR__ . "/../View/deletar.php";
    }
    /*public function salvar()
    {
        $sql = "INSERT INTO produtos (sku, nome, categoria_id, quantidade, valor, unidade_medida_id) VALUES (:sku, :nome, :categoria_id, :quantidade, :valor, :unidade_medida_id)";

        // Quando você usa prepare(), você separa a lógica SQL dos dados. Isso garante que os dados sejam tratados de forma segura
        $stmt = $this->connection->prepare($sql);

        // Ao usar filter_input(), você reduz o risco de injeção de SQL e garante que os dados são válidos antes de tentar processá-los.
        // FILTER_SANITIZE_STRING - remove caracteres especiais de uma string, como <, >, ", ', etc., que poderiam ser utilizados para injeção de código malicioso

        $sku = filter_input(INPUT_POST, 'sku', FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $categoria_id = filter_input(INPUT_POST, 'categoria_id', FILTER_VALIDATE_INT);
       

        // Garantir que os dados são válidos antes de tentar executar
        if (!$sku || !$nome || !$categoria_id || !$quantidade || !$valor || !$unidade_medida_id) {
            throw new InvalidArgumentException("Dados inválidos fornecidos.");
        }

        try {
            $stmt->execute([
                ':sku' => $sku,
                ':nome' => $nome,
                ':categoria_id' => $categoria_id,
                ':quantidade' => $quantidade,
                ':valor' => $valor,
                ':unidade_medida_id' => $unidade_medida_id,
            ]);
        } catch (PDOException $e) {
            error_log("Erro de banco de dados: " . $e->getMessage());
            echo "Erro ao atualizar o produto.";
        }

        header('Location: /produtos');
    }*/
   
}