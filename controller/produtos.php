<?php

$smarty = new Template(); 

$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('PRO', $produtos->GetItens());
$smarty->display('produtos.tpl');


 ?>	
