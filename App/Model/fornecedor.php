<?php
class FornecedorModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar fornecedor
    public function criarFornecedor($nome, $cnpj, $endereco, $telefone, $email, $produtos) {
        $sql = "INSERT INTO fornecedor (nome, cnpj, endereco, telefone, email, produtos) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $cnpj, $endereco, $telefone, $email, $produtos]);
    }

    // Model para listar fornecedor
    public function listarFornecedores() {
        $sql = "SELECT * FROM fornecedor";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        // Model para atualizar fornecedor
        public function atualizarFornecedor($id, $nome, $cnpj, $endereco, $telefone, $email, $produtos) {
            $sql = "UPDATE fornecedor SET nome = ?, cnpj = ?, endereco = ?, telefone = ?, email = ?, produtos = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$nome, $cnpj, $endereco, $telefone, $email, $produtos, $id]);
    
            header('Location: lista.php');
            exit();
        }
        
        // Model para deletar fornecedor
        public function excluirFornecedor($id) {
            $sql = "DELETE FROM fornecedor WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
        }

        public function showFornecedorId($id) {
            $sql = "SELECT * FROM fornecedor WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
    
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
}
?>