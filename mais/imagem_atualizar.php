<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<?
$sql_imagens = "SELECT * FROM IMAGENS ORDER BY ID";
$imagens = @mysql_query($sql_imagens,$conexao);
$num_imagens = @mysql_num_rows($imagens);
$num_imagens = @mysql_result($imagens,($num_imagens - 1),'ID');
@mysql_free_result($imagens);
$ids = array();
for ($n = 0; $n < $num_imagens; $n++) {
	$id_imagem = $n + 1;
	$sel_diretorio_temp = trim($_POST['sel_diretorio_' . $id_imagem]);
	$sel_mostrar_temp = trim($_POST['sel_mostrar_' . $id_imagem]);
	$sql_atualizar = "UPDATE IMAGENS SET ID_DIRETORIO=$sel_diretorio_temp, MOSTRAR='$sel_mostrar_temp' WHERE ID=$id_imagem";
	if (@mysql_query($sql_atualizar,$conexao)) {
		$ids[$n] = $id_imagem;
	}
}
$imagens = implode(',',$ids);
$msg .= "Imagem(s) [$imagens] atualizada(s) com sucesso.";
//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
header("Location: imagens.php?msg=" . urlencode($msg) . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
