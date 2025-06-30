<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: A.G.A. Studio ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function mouse_sobre(obj) {
	obj.style.border = '1px solid #000000';
	obj.style.cursor = 'hand';
}
function mouse_sai(obj) {
	obj.style.border = '';
	obj.style.cursor = '';
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem" STYLE="background-color: #FFFFFF;">
<? require_once('frm_html.php'); ?>
<? require_once('msg.php'); ?>
<TABLE CLASS="tbl">
	<TR>
		<TD STYLE="text-align: right; color: #000000;" onMouseOver="this.style.cursor = 'hand';" onMouseOut="this.style.cursor = '';" onClick="self.close();">x Fechar x</TD>
	</TR>
	<TR>
<?
$id_categoria = trim(@$_GET['id_categoria']);
$sql_categoria = "SELECT * FROM CATEGORIAS WHERE ID=$id_categoria";
$categoria = mysql_query($sql_categoria,$conexao);
?>
		<TD STYLE="text-align: center;"><H1><?=mysql_result($categoria,0,'ID');?></H1></TD>
	</TR>
	<TR>
		<TD STYLE="width: 100%; height: 100%; text-align: center; vertical-align: middle;">
			<TABLE STYLE="width: 90%; vertical-align: middle;">
<?
$sql_produtos = "SELECT * FROM PRODUTOS WHERE ID_CATEGORIA=$id_categoria AND MOSTRAR='S'";
$produtos = mysql_query($sql_produtos,$conexao);
for ($n = 0; $n < @mysql_num_rows($produtos); $n++) {
?>
				<TR>
<?
	$id_imagem = @mysql_result($produtos,$n,'ID_IMAGEM');
	$sql_imagem = "SELECT * FROM IMAGENS WHERE ID=$id_imagem";
	$imagem = @mysql_query($sql_imagem,$conexao);
	$link_img_tmp = './fotos_moveis/' . @mysql_result($imagem,0,'ARQUIVO');
	$tam_img_tmp = miniatura($link_img_tmp);
?>
					<TD CLASS="produtos"><IMG STYLE="border: 0px; width: <?=$tam_img_tmp[0];?>px; height: <?=$tam_img_tmp[1];?>px;" SRC="<?=$link_img_tmp;?>" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('produto.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>','_blank');" TITLE="<?=mysql_result($produtos,$n,'NOME');?>"></TD>
<?	if (($n + 1) == @mysql_num_rows($produtos)) { ?>
					<TD COLSPAN="2">&nbsp;</TD>
<?
	} else {
		$n++;

		$id_imagem = @mysql_result($produtos,$n,'ID_IMAGEM');
		$sql_imagem = "SELECT * FROM IMAGENS WHERE ID=$id_imagem";
		$imagem = @mysql_query($sql_imagem,$conexao);
		$link_img_tmp = './fotos_moveis/' . @mysql_result($imagem,0,'ARQUIVO');
		$tam_img_tmp = miniatura($link_img_tmp);
?>
					<TD CLASS="produtos"><IMG STYLE="border: 0px; width: <?=$tam_img_tmp[0];?>px; height: <?=$tam_img_tmp[1];?>px;" SRC="<?=$link_img_tmp;?>" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('produto.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>','_blank');" TITLE="<?=mysql_result($produtos,$n,'NOME');?>"></TD>
<?		if (($n + 1) == @mysql_num_rows($produtos)) { ?>
					<TD>&nbsp;</TD>
<?
		} else {
			$n++;

			$id_imagem = @mysql_result($produtos,$n,'ID_IMAGEM');
			$sql_imagem = "SELECT * FROM IMAGENS WHERE ID=$id_imagem";
			$imagem = @mysql_query($sql_imagem,$conexao);
			$link_img_tmp = './fotos_moveis/' . @mysql_result($imagem,0,'ARQUIVO');
			$tam_img_tmp = miniatura($link_img_tmp);
?>
					<TD CLASS="produtos"><IMG STYLE="border: 0px; width: <?=$tam_img_tmp[0];?>px; height: <?=$tam_img_tmp[1];?>px;" SRC="<?=$link_img_tmp;?>" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('produto.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>','_blank');" TITLE="<?=mysql_result($produtos,$n,'NOME');?>"></TD>
				</TR>
<?
		}
	}
 }
?>
			</TABLE>
		</TD>
	</TR>
</TABLE>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
