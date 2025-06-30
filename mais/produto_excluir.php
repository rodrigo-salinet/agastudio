<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('../msg.php'); ?>
<?
$id_produto = trim(@$_GET['id_produto']);
$id_categoria = trim(@$_GET['id_categoria']);

$sql_produto = "SELECT * FROM PRODUTOS WHERE ID=$id_produto";
$produto = @mysql_query($sql_produto,$conexao);
$nome_produto = @mysql_result($produto,0,'NOME');
@mysql_free_result($produto);

$sql_excluir = "DELETE FROM PRODUTOS WHERE ID=$id_produto";
if(@mysql_query($sql_excluir,$conexao)) {
	$msg .= "O Produto [$nome_produto] foi excluído com sucesso.";
} else {
	$msg .= "O Produto [$nome_produto] não foi excluído com sucesso.";
}

//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
header("Location: produtos.php?msg=" . urlencode($msg) . "&id_categoria=$id_categoria" . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
