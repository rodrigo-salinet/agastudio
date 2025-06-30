<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<?
$txt_titulo = trim(@$_POST['txt_titulo']);
$txt_ementa = trim(@$_POST['txt_ementa']);
$txt_texto = trim(@$_POST['txt_texto']);
$txt_local = trim(@$_POST['txt_local']);
$sel_img = trim(@$_POST['sel_img']);
$sel_mostrar = trim(@$_POST['sel_mostrar']);


$sql_adicionar = "INSERT INTO EVENTOS (ID_IMAGEM,TITULO,EMENTA,TEXTO,LOCAL,DIA_EVENTO,MES_EVENTO,ANO_EVENTO,HORA_EVENTO,MINUTO_EVENTO_SEGUNDO_EVENTO,DIA,MES,ANO,HORA,MINUTO,SEGUNDO,MOSTRAR) VALUES ($sel_img,'$txt_titulo','$txt_ementa','$txt_texto',)";
if (@mysql_query($sql_adicionar,$conexao)) {
	$msg .= "Categoria [$nome_categoria] adicionada com sucesso.";
} else {
	$msg .= "Categoria [$nome_categoria] não adicionada com sucesso.";
}

//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
header("Location: categorias.php?msg=" . urlencode($msg) . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
