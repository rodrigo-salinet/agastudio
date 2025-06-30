<?
// Não remover ou mover este código do lugar.
$txt_html = trim($_POST['txt_html']);
$linhas = explode("\r\n",$txt_html);
?>
<HTML>
<HEAD>
<TITLE>HTML</TITLE>
<STYLE TYPE="TEXT/CSS">
body {
	border: 0px;
	margin: 0px;
	padding: 0px;
}
table {
	border-collapse: collapse;
	background-color: #CCCCCC;
	border: 0px;
}
td {
	background-color: #FFFFFF;
	vertical-align: middle;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	white-space: nowrap;
	padding: 3px;
	border: 2px outset #00FF00;
	background-image: url(imagens/fundo_pagina.gif);
}
.nlinha {
	font-weight: bolder;
	vertical-align: top;
	text-align: right;
	width: 1%;
}
</STYLE>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function verifica_tecla() {
	var codigo_tecla = event.keyCode;
	var tecla = String.fromCharCode(codigo_tecla);
	if (isNaN(tecla) == true || tecla == ' ') {
		event.returnValue = false;
	}
}
function mostra_linha(obj) {
	if (obj.value != '') {
		if (obj.value <= <?=count($linhas);?>) {
			if (linha_anterior != null) {
				linha_anterior.style.backgroundColor = '';
			}
			if (script_anterior != null) {
				script_anterior.style.backgroundColor = '';
			}
			var linha_atual = document.getElementById('linha_' + obj.value);
			var script_atual = document.getElementById('script_' + obj.value);
			window.location.href = '#' + obj.value;
			obj.focus();
			obj.value = obj.value;
			if (linha_atual != null) {
				linha_atual.style.backgroundColor = '#FFFF00';
			}
			if (script_atual != null) {
				script_atual.style.backgroundColor = '#FFFF00';
			}
			linha_anterior = linha_atual;
			script_anterior = script_atual;
		}
	}
}
var linha_anterior;
var script_anterior;
</SCRIPT>
</HEAD>
<BODY onLoad="document.getElementById('txt_linha').focus();">
<BR>
<H3 ALIGN="CENTER">Visualizador HTML</H3>
<CENTER>
	Digite a linha que deseja visualizar: <INPUT NAME="txt_linha" TYPE="TEXT" CLASS="txt" ID="txt_linha" onKeyPress="verifica_tecla();" onKeyUp="mostra_linha(this);" SIZE="5" MAXLENGTH="5" ONPASTE="return false;">
</CENTER>
<BR>
<DIV STYLE="height: 400px; overflow: auto; border: 1px dashed #000000;">
<TABLE>
	<TR>
		<TD>Linha:</TD>
		<TD>Script:</TD>
	</TR>
<?
for ($n = 0; $n < count($linhas); $n++) {
$linha = $linhas[$n];
$linha = str_replace(chr(92),'',$linha);
?>
	<TR>
		<TD CLASS="nlinha" ID="linha_<?=($n + 1);?>"><A NAME="<?=($n + 1);?>"><?=($n + 1);?></A></TD>
		<TD ID="script_<?=($n + 1);?>"><?=str_replace("\t",'&nbsp;&nbsp;&nbsp;&nbsp;',htmlspecialchars($linha));?></TD>
	</TR>
<? } ?>
</TABLE>
</DIV>
</BODY>
</HTML>