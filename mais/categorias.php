<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: A.G.A. Studio ::.</TITLE>
<LINK HREF="../estilos.css" REL="stylesheet" TYPE="text/css">
<STYLE TYPE="TEXT/CSS">
body {
	scrollbar-face-color: #FFFFFF;
	scrollbar-highlight-color: #AAAAAA;
	scrollbar-3dlight-color: #000000;
	scrollbar-darkshadow-color: #DDDDDD;
	scrollbar-shadow-color: #51A432;
	scrollbar-arrow-color: #51A432;
	scrollbar-track-color: #FFFFFF;
	margin: 0px;
	padding: 0px;
	background-color: #FFFFFF;
	border: 0px;
}
body, td, marquee, div, span, a, font, input, select {
	font-family: Tahoma, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
a:link {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
	color: #CCCCCC;
}
a:visited {
	text-decoration: none;
	color: #0000FF;
}
</STYLE>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="../javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function mouse_sobre(obj) {
	obj.style.backgroundColor = '#EEEEEE';
	obj.style.cursor = 'hand';
}
function mouse_sai(obj) {
	obj.style.backgroundColor = '';
	obj.style.cursor = '';
}
function adicionar() {
	abrir_janela('categoria_adicionar.php?nome_categoria=' + prompt('Digite o nome da categoria:',''),'_self');
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem" STYLE="background-color: #FFFFFF;">
<? require_once('../frm_html.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('../msg.php'); ?>
<BR>
<FORM ACTION="categoria_atualizar.php" ID="frm_categorias" METHOD="POST" NAME="frm_categorias">
<TABLE ALIGN="CENTER">
	<TR>
		<TD COLSPAN="3">&nbsp;</TD>
	</TR>
	<TR>
		<TD>Nome da seção:</TD>
		<TD>Mostrar:</TD>
		<TD>Ação:</TD>
	</TR>
<?
$sql_categorias = "SELECT * FROM CATEGORIAS ORDER BY NOME";
$categorias = mysql_query($sql_categorias,$conexao);
for ($n = 0; $n < @mysql_num_rows($categorias); $n++) {
?>
	<TR>
		<TD><INPUT TYPE="TEXT" NAME="txt_nome_<?=@mysql_result($categorias,$n,'ID');?>" ID="txt_nome_<?=@mysql_result($categorias,$n,'ID');?>" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onDblClick="abrir_janela('produtos.php?id_categoria=<?=mysql_result($categorias,$n,'ID');?>','_self');" VALUE="<?=mysql_result($categorias,$n,'NOME');?>"></TD>
		<TD>
			<SELECT NAME="sel_mostrar_<?=@mysql_result($categorias,$n,'ID');?>" ID="sel_mostrar_<?=@mysql_result($categorias,$n,'ID');?>">
<?
	$selecionar = '';
	if (@mysql_result($categorias,$n,'MOSTRAR') == 'S') {
		$selecionar = 'SELECTED';
	}
?>
				<OPTION VALUE="S" <?=$selecionar;?>>Sim</OPTION>
<?
	$selecionar = '';
	if (@mysql_result($categorias,$n,'MOSTRAR') == 'N') {
		$selecionar = 'SELECTED';
	}
?>
				<OPTION VALUE="N" <?=$selecionar;?>>Não</OPTION>
			</SELECT>
		</TD>
		<TD STYLE="color: #FF0000; font-weight: bold; text-align: center" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('categoria_excluir.php?id_categoria=<?=mysql_result($categorias,$n,'ID');?>','_self');" TITLE="Excluir">X</TD>
	</TR>
<? } ?>
	<TR>
		<TD COLSPAN="3" STYLE="text-align: center;"><INPUT TYPE="BUTTON" VALUE="Adicionar" onClick="adicionar();"> <INPUT TYPE="SUBMIT" VALUE="Atualizar"> <INPUT TYPE="RESET" VALUE="Cancelar"></TD>
	<TR>
</TABLE>
</FORM>
<? require_once('../menu_contexto.php'); ?>
<? require_once('../script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
