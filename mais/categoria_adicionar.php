<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<?
$nome_categoria = trim(@$_GET['nome_categoria']);
$sql_adicionar = "INSERT INTO CATEGORIAS (NOME) VALUES ('$nome_categoria')";
if (@mysql_query($sql_adicionar,$conexao)) {
	$msg .= "Categoria [$nome_categoria] adicionada com sucesso.";
} else {
	$msg .= "Categoria [$nome_categoria] não adicionada com sucesso.";
}

//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
header("Location: categorias.php?msg=" . urlencode($msg) . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
