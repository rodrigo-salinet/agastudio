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
	obj.style.backgroundColor = '#000000';
	obj.style.color = '#FFFFFF';
	obj.style.cursor = 'hand';
}
function mouse_sai(obj) {
	obj.style.backgroundColor = '';
	obj.style.color = '';
	obj.style.cursor = '';
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem" STYLE="background-color: #FFFFFF;">
<? require_once('../frm_html.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('../msg.php'); ?>
<BR>
<TABLE CLASS="tbl">
	<TR>
		<TD STYLE="vertical-align: top; width: 100%; height: 100%;"><IFRAME SRC="categorias.php" NAME="mainFrame" ID="mainFrame" STYLE="width: 100%; height: 100%;" ALLOWTRANSPARENCY="true" APPLICATION="true"></IFRAME></TD>
	</TR>
	<TR>
		<TD STYLE="width: 100%; height: 0.01%;">
			<TABLE STYLE=" width: 100%; height: 0.01%;">
				<TR>
					<TD CLASS="menu_adm" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('categorias.php','mainFrame');">Produtos</TD>
					<TD CLASS="menu_adm" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('eventos.php','mainFrame');">Eventos</TD>
					<TD CLASS="menu_adm" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('parceiros.php','mainFrame');">Parceiros</TD>
					<TD CLASS="menu_adm" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('mala_direta.php','mainFrame');">Mala Direta</TD>
					<TD CLASS="menu_adm" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('imagens.php','mainFrame');">Imagens</TD>
					<TD CLASS="menu_adm" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('login.php','_self');">Sair</TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
</TABLE>
<? require_once('../menu_contexto.php'); ?>
<? require_once('../script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
