<?php
require_once 'C:\xampp\htdocs\agro_mais\config\config.php';
require_once 'C:\xampp\htdocs\agro_mais\App\Controller\financeiro.php';

$financeiroController = new FinanceiroController($pdo);
$financeiros = $financeiroController->listarFinanceiros();

$financeiroController->exibirListaFinanceiros();

?>

<a href="../../../Public/index.php">voltar</a>                  
<a href="../../funcoes/financeiro/criar.php">Criar financeiro</a>