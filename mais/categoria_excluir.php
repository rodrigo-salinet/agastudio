<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<?
$id_categoria = trim(@$_GET['id_categoria']);
$sql_excluir = "DELETE FROM CATEGORIAS WHERE ID=$id_categoria";
if (@mysql_query($sql_excluir,$conexao)) {
	$msg .= "Categoria exclu�da com sucesso.";
} else {
	$msg .= "Categoria n�o exclu�da com sucesso.";
}

//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
header("Location: categorias.php?msg=" . urlencode($msg) . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
