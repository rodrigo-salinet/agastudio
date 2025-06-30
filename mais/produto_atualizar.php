<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('../msg.php'); ?>
<?
$hdn_id_produto = trim(@$_POST['HDN_ID_PRODUTO']);
$sel_categoria = trim(@$_POST['sel_categoria']);
$sel_img = trim(@$_POST['sel_img']);
$txt_nome = trim(@$_POST['txt_nome']);
$sel_lancamento = trim(@$_POST['sel_lancamento']);
$sel_mostrar = trim(@$_POST['sel_mostrar']);

$sql_atualizar = "UPDATE PRODUTOS SET ID_CATEGORIA=$sel_categoria, ID_IMAGEM=$sel_img, NOME='$txt_nome', LANCAMENTO='$sel_lancamento', MOSTRAR='$sel_mostrar' WHERE ID=$hdn_id_produto";
if(@mysql_query($sql_atualizar,$conexao)) {
	$msg .= "O produto [$txt_nome] foi atualizado com sucesso.";
} else {
	$msg .= "O produto [$txt_nome] não foi atualizado com sucesso.";
}

//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
header("Location: produto.php?msg=" . urlencode($msg) . "&id_produto=$hdn_id_produto&nome_arquivo=" . urlencode($nome_arquivo) . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
