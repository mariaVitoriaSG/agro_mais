<?php
require_once 'C:\xampp\htdocs\agro_mais\config\config.php';
require_once 'C:\xampp\htdocs\agro_mais\App\Controller\funcionarios.php';

$funcionarioController = new funcionarioController($pdo);
$funcionarios = $funcionarioController->listarFuncionarios();

$funcionarioController->exibirListaFuncionarios();

?>

<a href="../../../Public/index.php">voltar</a>                  
<a href="../../funcoes/funcionario/criar.php">Criar funcionário</a>