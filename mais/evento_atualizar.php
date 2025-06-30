<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<?
/*$sql_categorias = "SELECT * FROM CATEGORIAS ORDER BY ID";
$categorias = @mysql_query($sql_categorias,$conexao);
$num_categorias = @mysql_num_rows($categorias);
$num_categorias = mysql_result($categorias,($num_categorias - 1),'ID');
@mysql_free_result($categorias);
for ($n = 0; $n < $num_categorias; $n++) {
	$id_categoria = $n + 1;
	$txt_nome_temp = trim($_POST['txt_nome_' . $id_categoria]);
	$sel_mostrar_temp = trim($_POST['sel_mostrar_' . $id_categoria]);
	$sql_atualizar = "UPDATE CATEGORIAS SET NOME='$txt_nome_temp', MOSTRAR='$sel_mostrar_temp' WHERE ID=$id_categoria";
	if (@mysql_query($sql_atualizar,$conexao)) {
		$msg .= "Categoria [$txt_nome_temp] atualizadas com sucesso.";
	} else {
		$msg .= "Categoria [$txt_nome_temp] não atualizadas com sucesso.";
	}
}
//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();*/
header("Location: evento.php?msg=" . urlencode($msg) . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
