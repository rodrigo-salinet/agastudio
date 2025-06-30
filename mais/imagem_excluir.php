<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('../msg.php'); ?>
<?
$id_imagem = trim(@$_GET['id_imagem']);
$get_vars = trim(@$_SERVER['QUERY_STRING']);

$sql_imagem = "SELECT * FROM IMAGENS WHERE ID=$id_imagem";
$imagem = @mysql_query($sql_imagem,$conexao);
$arq_img = @mysql_result($imagem,0,'ARQUIVO');
$id_diretorio = @mysql_result($imagem,0,'ID_DIRETORIO');
$sql_diretorio = "SELECT * FROM DIRETORIOS WHERE ID=$id_diretorio";
$diretorio = @mysql_query($sql_diretorio,$conexao);
$dir_img = @mysql_result($diretorio,0,'DIRETORIO');
@mysql_free_result($imagem);

if (@unlink("../$dir_img/$arq_img")) {
	$msg .= "A imagem [$arq_img] foi excluída do diretório [$dir_img] com sucesso.";
} else {
	$msg .= "A imagem [$arq_img] não foi excluída do diretório [$dir_img] com sucesso.";
}

$sql_excluir = "DELETE FROM IMAGENS WHERE ID=$id_imagem";
if(@mysql_query($sql_excluir,$conexao)) {
	$msg .= "A imagem [$arq_img] foi excluída do banco de dados com sucesso.";
} else {
	$msg .= "A imagem [$arq_img] não foi excluída do banco de dados com sucesso.";
}

//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
header("Location: produto.php?$get_vars&msg=" . urlencode($msg) . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
