<?php
require_once 'C:\xampp\htdocs\agro_mais\config\config.php';
require_once 'C:\xampp\htdocs\agro_mais\App\Controller\estoque.php';

$estoqueController = new EstoqueController($pdo);
$estoques = $estoqueController->listarEstoques();

$estoqueController->exibirListaEstoques();

?>

<a href="../../../Public/index.php">voltar</a>                  
<a href="../../funcoes/estoque/criar.php">Criar estoque</a>