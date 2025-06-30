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
	scrollbar-shadow-color: #000000;
	scrollbar-arrow-color: #000000;
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
function muda_img(arq) {
	var img_foto = document.getElementById('img_foto');
	img_foto.src = '../fotos_moveis/' + arq;
}
function adicionar_imagem() {
	var frm_produto = document.getElementById('frm_produto');
	var file_img = document.getElementById('file_img');
	if (file_img.value != '') {
		frm_produto.action = 'imagem_adicionar.php';
		frm_produto.submit();
	} else {
		alert('Selecione primeiro o arquivo clicando no botão "Procurar..." para localizar o arquivo antes de enviar');
		file_img.focus();
	}
}
function analisa_form(obj) {
	obj.enctype = 'TEXT/PLAIN';
	return obj.submit();
}
function mouse_sobre(obj) {
	obj.style.backgroundColor = '#CCCCCC';
	obj.style.cursor = 'hand';
}
function mouse_sai(obj) {
	obj.style.backgroundColor = '';
	obj.style.cursor = '';
}
function excluir_imagem() {
	var sel_img = document.getElementById('sel_img');
	var HDN_ID_PRODUTO = document.getElementById('HDN_ID_PRODUTO');
	abrir_janela('imagem_excluir.php?id_imagem=' + sel_img.options[sel_img.selectedIndex].value + '&id_produto=' + HDN_ID_PRODUTO.value,'_self');
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('../frm_html.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('../msg.php'); ?>
<FORM ACTION="produto_atualizar.php" ID="frm_produto" METHOD="POST" NAME="frm_produto" ENCTYPE="MULTIPART/FORM-DATA" onSubmit="return analisa_form(this);">
	<INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" ID="MAX_FILE_SIZE" VALUE="2000000">
	<INPUT TYPE="HIDDEN" NAME="HDN_PG" ID="HDN_PG" VALUE="<?=basename($_SERVER['PHP_SELF']);?>">
<TABLE ALIGN="CENTER">
	<TR>
		<TD CLASS="td_login">ID:</TD>
		<TD CLASS="td_login">Título:</TD>
		<TD CLASS="td_login">Ementa:</TD>
		<TD CLASS="td_login">Ação:</TD>
	</TR>
<?
$sql_eventos = "SELECT * FROM EVENTOS ORDER BY ANO,MES,DIA";
$eventos = mysql_query($sql_eventos,$conexao);
for ($n = 0; $n < @mysql_num_rows($eventos); $n++) {
?>
	<TR>
		<TD onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('evento.php?id_evento=<?=@mysql_result($eventos,$n,'ID');?>','_self');"><?=@mysql_result($eventos,$n,'ID');?></TD>
		<TD onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('evento.php?id_evento=<?=@mysql_result($eventos,$n,'ID');?>','_self');"><?=@mysql_result($eventos,$n,'TITULO');?></TD>
		<TD onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('evento.php?id_evento=<?=@mysql_result($eventos,$n,'ID');?>','_self');"><?=@mysql_result($eventos,$n,'EMENTA');?></TD>
		<TD><INPUT TYPE="BUTTON" VALUE="Excluir" onClick="abrir_janela('excluir_evento.php?id_evento=<?=@mysql_result($eventos,$n,'ID');?>','_self');"></TD>
	</TR>
<? } ?>
	<TR>
		<TD STYLE="text-align: center;" COLSPAN="7"><INPUT TYPE="SUBMIT" VALUE="Atualizar"> <INPUT TYPE="RESET" VALUE="Cancelar"></TD>
	<TR>
</TABLE>
</FORM>
<? require_once('../menu_contexto.php'); ?>
<? require_once('../script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
