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
td {
	border-color: #000000;
	border-style: solid;
	border-width: 1px;
	padding: 2px;
}
</STYLE>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="../javascript.js"></SCRIPT>
<?
$id_produto = trim(@$_GET['id_produto']);
$sql_produto = "SELECT * FROM PRODUTOS WHERE ID=$id_produto";
$produto = mysql_query($sql_produto,$conexao);
$id_imagem = @mysql_result($produto,0,'ID_IMAGEM');

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
function excluir_imagem(id_img) {
	abrir_janela('imagem_excluir.php?id_imagem=' + id_img,'_self');
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('../frm_html.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('../msg.php'); ?>
<FORM ACTION="imagem_atualizar.php" ID="frm_produto" METHOD="POST" NAME="frm_produto" ENCTYPE="MULTIPART/FORM-DATA" onSubmit="return analisa_form(this);">
<TABLE ALIGN="CENTER">
	<TR>
		<TD COLSPAN="5">
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD STYLE="width: 0.01%;">Imagem:</TD>
					<TD><INPUT TYPE="FILE" NAME="file_img" ID="file_img" STYLE="width: 100%;"></TD>
				</TR>
				<TR>
					<TD STYLE="width: 0.01%;">Diretório:</TD>
					<TD>
						<SELECT NAME="sel_diretorio" ID="sel_diretorio">
<?
$sql_diretorios = "SELECT * FROM DIRETORIOS ORDER BY DIRETORIO";
$diretorios = mysql_query($sql_diretorios,$conexao);
for ($i = 0; $i < @mysql_num_rows($diretorios); $i++) {
?>
							<OPTION VALUE="<?=@mysql_result($diretorios,$i,'ID');?>"><?=@mysql_result($diretorios,$i,'DIRETORIO');?></OPTION>
<? } ?>
						</SELECT>
					</TD>
				</TR>
				<TR>
					<TD COLSPAN="2"><INPUT TYPE="BUTTON" VALUE="Adicionar imagem" onClick="adicionar_imagem();"></TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN="5">&nbsp;</TD>
	</TR>
	<TR>
		<TD>ID:</TD>
		<TD>Arquivo:</TD>
		<TD>Diretório:</TD>
		<TD>Mostrar:</TD>
		<TD>Ação:</TD>
	</TR>
<?
$sql_imagens = "SELECT * FROM IMAGENS ORDER BY ARQUIVO";
$imagens = mysql_query($sql_imagens,$conexao);
for ($n = 0; $n < @mysql_num_rows($imagens); $n++) {
?>
	<TR>
		<TD><?=@mysql_result($imagens,$n,'ID');?></TD>
		<TD><?=@mysql_result($imagens,$n,'ARQUIVO');?></TD>
		<TD>
			<SELECT NAME="sel_diretorio_<?=@mysql_result($imagens,$n,'ID');?>" ID="sel_diretorio_<?=@mysql_result($imagens,$n,'ID');?>">
<?
	for ($i = 0; $i < @mysql_num_rows($diretorios); $i++) {
		$selecionar = '';
		if (@mysql_result($diretorios,$i,'ID') == @mysql_result($imagens,$n,'ID_DIRETORIO')) {
			$selecionar = 'SELECTED';
		}
?>
				<OPTION VALUE="<?=@mysql_result($diretorios,$i,'ID');?>" <?=$selecionar;?>><?=@mysql_result($diretorios,$i,'DIRETORIO');?></OPTION>
<?	} ?>
			</SELECT>
		</TD>
		<TD>
			<SELECT NAME="sel_mostrar_<?=@mysql_result($imagens,$n,'ID');?>" ID="sel_mostrar_<?=@mysql_result($imagens,$n,'ID');?>">
<?
	$selecionar = '';
	if (@mysql_result($imagens,$n,'MOSTRAR') == 'S') {
		$selecionar = 'SELECTED';
	}
?>
				<OPTION VALUE="S" <?=$selecionar;?>>Sim</OPTION>
<?
	$selecionar = '';
	if (@mysql_result($imagens,$n,'MOSTRAR') == 'N') {
		$selecionar = 'SELECTED';
	}
?>
				<OPTION VALUE="N" <?=$selecionar;?>>Não</OPTION>
			</SELECT>
		</TD>
		<TD STYLE="color: #FF0000; font-weight: bold; text-align: center;" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="excluir_imagem(<?=@mysql_result($imagens,$n,'ID');?>);" TITLE="Excluir imagem">X</TD>
	</TR>
<? } ?>
	<TR>
		<TD COLSPAN="5" STYLE="text-align: center;"><INPUT TYPE="SUBMIT" VALUE="Atualizar"> <INPUT TYPE="RESET" VALUE="Cancelar"></TD>
	</TR>
</TABLE>
</FORM>
<? require_once('../menu_contexto.php'); ?>
<? require_once('../script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
