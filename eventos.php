<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: A.G.A. Studio ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('msg.php'); ?>
<TABLE ALIGN="CENTER">
<?
$sql_eventos = "SELECT * FROM EVENTOS WHERE MOSTRAR='S' ORDER BY ANO,MES,DIA";
$eventos = mysql_query($sql_eventos,$conexao);
for ($n = 0; $n < @mysql_num_rows($eventos); $n++) {
?>
	<TR>
<?
	$id_imagem = @mysql_result($imagem,0,'ID_IMAGEM');
	$sql_imagem = "SELECT * FROM IMAGENS WHERE ID=id_imagem AND MOSTRAR='S'";
	$imagem = mysql_query($sql_imagem,$conexao);
?>
		<TD ROWSPAN="2"><IMG SRC="fotos_eventos\<?=@mysql_result($imagem,0,'ARQUIVO');?>"></TD>
		<TD><?=@mysql_result($eventos,$n,'TITULO');?></TD>
	</TR>
	<TR>
		<TD><?=@mysql_result($eventos,$n,'EMENTA');?></TD>
	</TR>
<? } ?>
</TABLE>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
