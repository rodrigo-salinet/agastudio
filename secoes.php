<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: A.G.A. Studio ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function mouse_sobre(obj) {
	obj.style.backgroundColor = '#EEEEEE';
	obj.style.color = '#000000';
	obj.style.cursor = 'hand';
	obj.style.fontSize = '40px';
}
function mouse_sai(obj) {
	obj.style.backgroundColor = '';
	obj.style.color = '';
	obj.style.cursor = '';
	obj.style.fontSize = '';
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('msg.php'); ?>
<TABLE STYLE="width: 99%; height: 99%; position: absolute;">
	<TR>
		<TD STYLE="width: 100%; height: 100%; text-align: center; vertical-align: middle;">
			<TABLE STYLE="width: 80%; vertical-align: middle;">
<?
$sql_categorias = "SELECT * FROM CATEGORIAS WHERE MOSTRAR='S' ORDER BY NOME";
$categorias = mysql_query($sql_categorias,$conexao);

$num_lin_mesclar = @mysql_num_rows($categorias) / 2;
if (intval($num_lin_mesclar) < $num_lin_mesclar) {
	$num_lin_mesclar += 0.5;
}

for ($n = 0; $n < @mysql_num_rows($categorias); $n++) {
?>
				<TR>
					<TD CLASS="menu_home" STYLE="text-align: left;" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('produtos.php?id_categoria=<?=mysql_result($categorias,$n,'ID');?>','_blank');"><?=htmlspecialchars(mysql_result($categorias,$n,'NOME'));?></TD>
<?	if (($n + 1) == @mysql_num_rows($categorias)) { ?>
					<TD>&nbsp;</TD>
<?
	} else {
		$n++;
?>
					<TD CLASS="menu_home" STYLE="text-align: right;" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('produtos.php?id_categoria=<?=mysql_result($categorias,$n,'ID');?>','_blank');"><?=htmlspecialchars(mysql_result($categorias,$n,'NOME'));?></TD>
<?	} ?>
				</TR>
<? } ?>
			</TABLE>
		</TD>
	</TR>
</TABLE>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
