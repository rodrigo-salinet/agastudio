<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: A.G.A. Studio ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
</HEAD>
<BODY CLASS="rolagem" STYLE="background-color: #FFFFFF;">
<? require_once('frm_html.php'); ?>
<? require_once('msg.php'); ?>
<?
$id_produto = trim(@$_GET['id_produto']);
$sql_produto = "SELECT * FROM PRODUTOS WHERE ID=$id_produto";
$produto = mysql_query($sql_produto,$conexao);
?>
<TABLE CLASS="tbl">
	<TR>
		<TD STYLE="text-align: right; color: #000000;" onMouseOver="this.style.cursor = 'hand';" onMouseOut="this.style.cursor = '';" onClick="self.close();">x Fechar x</TD>
	</TR>
	<TR>
		<TD STYLE="width: 100%; height: 100%; text-align: center; vertical-align: middle;">
			<TABLE STYLE="width: 100%; vertical-align: middle;">
				<TR>
<?
$id_imagem = @mysql_result($produto,0,'ID_IMAGEM');
$sql_imagem = "SELECT * FROM IMAGENS WHERE ID=$id_imagem";
$imagem = @mysql_query($sql_imagem,$conexao);
$link_img_tmp = './fotos_moveis/' . @mysql_result($imagem,0,'ARQUIVO');
$tam_img_tmp = tamanho_maximo($link_img_tmp);
?>
					<TD CLASS="produtos"><IMG STYLE="border: 0px; width: <?=$tam_img_tmp[0];?>px; height: <?=$tam_img_tmp[1];?>px;" SRC="<?=$link_img_tmp;?>" TITLE="<?=mysql_result($produto,0,'NOME');?>"></TD>
			</TABLE>
		</TD>
	</TR>
</TABLE>

<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
