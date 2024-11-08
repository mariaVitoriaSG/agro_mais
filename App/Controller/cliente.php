<?php 
require_once 'C:\xampp\htdocs\agro_mais\App\Model\cliente.php';

class ClienteController {
    private $clienteModel;

    public function __construct($pdo) {

        $this->clienteModel = new ClienteModel($pdo);
    }

    public function criarCliente($nome, $email, $telefone, $CPF, $endereco, $historico) {
        $this->clienteModel->criarCliente($nome, $email, $telefone, $CPF, $endereco, $historico);
    }

    public function listarClientes() {
        return $this->clienteModel->listarClientes();
    }

    public function exibirListaClientes() {
        $clientes = $this->clienteModel->listarClientes();
        include 'C:\xampp\htdocs\agro_mais\App\View\cliente.php';
    }

    public function atualizarCliente($id, $nome, $email, $telefone, $CPF, $endereco, $historico) {
        $this->clienteModel->atualizarCliente($id, $nome, $email, $telefone, $CPF, $endereco, $historico);
    }
    
    public function excluirCliente ($id) {
        $this->clienteModel->excluirCliente($id);
    }

    public function showClienteId($id) {
        return $this->clienteModel->showClienteId($id);
    }
}
?>