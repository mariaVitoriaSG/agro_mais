<?php
require_once 'C:\xampp\htdocs\agro_mais\config\config.php';
require_once 'C:\xampp\htdocs\agro_mais\App\Controller\cliente.php';

$clienteController = new ClienteController($pdo);
$clientes = $clienteController->listarClientes();

$clienteController->exibirListaClientes();

?>

<a href="../../../Public/index.php">voltar</a>                  
<a href="../../funcoes/cliente/criar.php">Criar Cliente</a>