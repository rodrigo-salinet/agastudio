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
<?
$id_evento = trim(@$_GET['id_evento']);
$sql_evento = "SELECT * FROM EVENTOS WHERE ID=$id_evento";
$evento = mysql_query($sql_evento,$conexao);
$id_imagem = @mysql_result($evento,0,'ID_IMAGEM');

$sql_imagem = "SELECT * FROM IMAGENS WHERE ID=$id_imagem";
$imagem = mysql_query($sql_imagem,$conexao);
$id_diretorio = @mysql_result($imagem,0,'ID_DIRETORIO');

$sql_diretorio = "SELECT * FROM DIRETORIOS WHERE ID=$id_diretorio";
$diretorio = mysql_query($sql_diretorio,$conexao);
$dir_img = @mysql_result($diretorio,0,'DIRETORIO');
?>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function muda_img(arq) {
	var img_foto = document.getElementById('img_foto');
	img_foto.src = '../<?=$dir_img;?>/' + arq;
}
function adicionar_imagem() {
	var frm_produto = document.getElementById('frm_produto');
	var file_img = document.getElementById('file_img');
	if (file_img.value != '') {
		frm_produto.action = 'imagem_adicionar.php';
		frm_produto.submit();
	} else {
		alert('Selecione primeiro o arquivo clicando no bot�o "Procurar..." para localizar o arquivo antes de enviar');
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
<FORM ACTION="evento_atualizar.php" ID="frm_produto" METHOD="POST" NAME="frm_produto" ENCTYPE="MULTIPART/FORM-DATA" onSubmit="return analisa_form(this);">
	<INPUT TYPE="HIDDEN" NAME="HDN_ID_EVENTO" ID="HDN_ID_EVENTO" VALUE="<?=$id_evento;?>">
	<INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" ID="MAX_FILE_SIZE" VALUE="2000000">
	<INPUT TYPE="HIDDEN" NAME="HDN_PG" ID="HDN_PG" VALUE="<?=basename($_SERVER['PHP_SELF']);?>">
	<INPUT TYPE="HIDDEN" NAME="HDN_DIR" ID="HDN_DIR" VALUE="<?=$dir_img;?>">
	<INPUT TYPE="HIDDEN" NAME="HDN_ID_DIRETORIO" ID="HDN_ID_DIRETORIO" VALUE="<?=$id_diretorio;?>">
<TABLE ALIGN="CENTER">
	<TR>
		<TD COLSPAN="2"><A HREF="parceiros.php">Parceiros</A> - Evento</TD>
	</TR>
	<TR>
		<TD CLASS="td_login">ID:</TD>
		<TD><?=@mysql_result($evento,0,'ID');?></TD>
	</TR>
	<TR>
		<TD CLASS="td_login">T�tulo:</TD>
		<TD><INPUT TYPE="TEXT" NAME="txt_titulo" ID="txt_titulo" STYLE="width: 100%;" VALUE="<?=@mysql_result($evento,0,'TITULO');?>"></TD>
	</TR>
	<TR>
		<TD CLASS="td_login">Ementa:</TD>
		<TD><INPUT TYPE="TEXT" NAME="txt_ementa" ID="txt_ementa" STYLE="width: 100%;" VALUE="<?=@mysql_result($evento,0,'EMENTA');?>"></TD>
	</TR>
	<TR>
		<TD CLASS="td_login">Texto:</TD>
		<TD><TEXTAREA NAME="txt_texto" ID="txt_texto" STYLE="width: 100%;" ROWS="3"><?=@mysql_result($evento,0,'TEXTO');?></TEXTAREA></TD>
	</TR>
	<TR>
		<TD CLASS="td_login">Imagem:</TD>
		<TD>
			<SELECT NAME="sel_img" ID="sel_img" onChange="muda_img(this.options[this.selectedIndex].text);">
<?
$sql_imagens = "SELECT * FROM IMAGENS";
$imagens = mysql_query($sql_imagens,$conexao);
$achou = false;
$nome_arquivo = trim(@$_GET['nome_arquivo']);
for ($i = 0; $i < @mysql_num_rows($imagens); $i++) {
	$selecionar = '';
	if ($nome_arquivo == @mysql_result($imagens,$i,'ARQUIVO')) {
		$selecionar = 'SELECTED';
		$achou = true;
	} elseif (@mysql_result($imagens,$i,'ID') == @mysql_result($produto,$n,'ID_IMAGEM') && $achou == false) {
		$selecionar = 'SELECTED';
	}
?>
				<OPTION VALUE="<?=@mysql_result($imagens,$i,'ID');?>" <?=$selecionar;?>><?=@mysql_result($imagens,$i,'ARQUIVO');?></OPTION>
<?
}
@mysql_free_result($imagens);
?>
			</SELECT>
			<SPAN STYLE="color: #FF0000; font-weight: bold;" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="excluir_imagem();" TITLE="Excluir imagem">X</SPAN><BR>
<?
$link_img = "../$dir_img/" . @mysql_result($imagem,0,'ARQUIVO');
if ($achou == true) {
	$link_img = "../$dir_img/" . $nome_arquivo;
}
$tam_img_tmp = icone($link_img);
?>
			<IMG STYLE="border: 0px; width: <?=$tam_img_tmp[0];?>px; height: <?=$tam_img_tmp[1];?>px;" NAME="img_foto" ID="img_foto" SRC="<?=$link_img;?>">
		</TD>
	</TR>
	<TR>
		<TD CLASS="td_login" COLSPAN="2">Imagem:<BR>
			<INPUT TYPE="FILE" NAME="file_img" ID="file_img" STYLE="width: 100%;"><BR>
			<INPUT TYPE="BUTTON" VALUE="Adicionar imagem" onClick="adicionar_imagem();"></TD>
	</TR>
	<TR>
		<TD CLASS="td_login">Mostrar:</TD>
		<TD>
			<SELECT NAME="sel_mostrar" ID="sel_mostrar">
<?
$selecionar = '';
if (@mysql_result($evento,0,'MOSTRAR') == 'S') {
	$selecionar = 'SELECTED';
}
?>
				<OPTION VALUE="S" <?=$selecionar;?>>Sim</OPTION>
<?
$selecionar = '';
if (@mysql_result($evento,0,'MOSTRAR') == 'N') {
	$selecionar = 'SELECTED';
}
?>
				<OPTION VALUE="N" <?=$selecionar;?>>N�o</OPTION>
			</SELECT>
		</TD>
	</TR>
	<TR>
		<TD STYLE="text-align: center;" COLSPAN="7"><INPUT TYPE="SUBMIT" VALUE="Atualizar"> <INPUT TYPE="RESET" VALUE="Cancelar"> <INPUT TYPE="BUTTON" VALUE="Excluir" onClick="abrir_janela('excluir_evento.php?id_evento=<?=$id_produto;?>&id_categoria=<?=$id_categoria;?>','_self');"></TD>
	<TR>
</TABLE>
</FORM>
<? require_once('../menu_contexto.php'); ?>
<? require_once('../script_fim.php'); ?>
</BODY>
</HTML>
<?
echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
 while(@ob_end_flush()); ?>
