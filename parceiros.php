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
$sql_parceiros = "SELECT * FROM PARCEIROS WHERE MOSTRAR='S' ORDER BY NOME";
$parceiros = mysql_query($sql_parceiros,$conexao);
for ($n = 0; $n < @mysql_num_rows($parceiros); $n++) {
?>
	<TR>
<?
	$id_imagem = @mysql_result($parceiros,$n,'ID_IMAGEM');
	$sql_imagem = "SELECT * FROM IMAGENS WHERE ID=$id_imagem";
	$imagem = @mysql_query($sql_imagem,$conexao);
	$id_diretorio = @mysql_result($imagem,0,'ID_DIRETORIO');
	$sql_diretorio = "SELECT * FROM DIRETORIOS WHERE ID=$id_diretorio";
	$diretorio = @mysql_query($sql_diretorio,$conexao);
	$link_img_tmp = './' . @mysql_result($diretorio,0,'DIRETORIO') . '/' . @mysql_result($imagem,0,'ARQUIVO');
	if (@mysql_result($diretorio,0,'DIRETORIO') != '') {
		$tam_img_tmp = miniatura($link_img_tmp);
	}
?>
					<TD ROWSPAN="2" STYLE="width: 0.01%; height: 0.01%;"><IMG STYLE="border: 0px; width: <?=@$tam_img_tmp[0];?>px; height: <?=@$tam_img_tmp[1];?>px;" SRC="<?=@$link_img_tmp;?>" TITLE="<?=@mysql_result($parceiros,$n,'NOME');?>"></TD>
		<TD STYLE="height: 0.01%;"><A HREF="parceiro.php?id_parceiro=<?=@mysql_result($parceiros,$n,'ID');?>"><?=@mysql_result($parceiros,$n,'NOME');?></A></TD>
	</TR>
	<TR>
		<TD STYLE="height: 0.01%;"><A HREF="http://<?=@mysql_result($parceiros,$n,'SITE');?>" TARGET="_BLANK"><?=@mysql_result($parceiros,$n,'SITE');?></A></TD>
	</TR>
<? } ?>
</TABLE>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
