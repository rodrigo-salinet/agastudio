<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: A.G.A. Studio ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function mouse_sobre(obj) {
	obj.style.backgroundColor = '#FFFFFF';
	obj.style.color = '#000000';
	obj.style.cursor = 'hand';
	obj.style.fontWeight = 'bold';
}
function mouse_sai(obj) {
	obj.style.backgroundColor = '';
	obj.style.color = '';
	obj.style.cursor = '';
	obj.style.fontWeight = '';
}
function segredo_sobre(obj) {
	obj.style.backgroundColor = '#FFFFFF';
	obj.style.cursor = 'hand';
	obj.style.filter = '';
}
function segredo_sai(obj) {
	obj.style.backgroundColor = '#FFFFFF';
	obj.style.cursor = 'hand';
	obj.style.filter = 'Alpha(Opacity=0, FinishOpacity=0, Style=10, StartX=10, StartY=100, FinishX=10, FinishY=100)';
}
function senha() {
	if (prompt('Digite a contra-senha:','') == 'entrar') {
		abrir_janela('mais/login.php','_blank');
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('msg.php'); ?>
<TABLE CLASS="tbl">
	<TR>
		<TD STYLE="vertical-align: top; width: 100%; height: 100%;"><IFRAME SRC="home.php" NAME="mainFrame" ID="mainFrame" STYLE="width: 100%; height: 100%;" ALLOWTRANSPARENCY="true" APPLICATION="true"></IFRAME></TD>
	</TR>
	<TR>
		<TD STYLE="width: 100%; height: 0.01%;">
			<TABLE STYLE=" width: 100%; height: 0.01%; background-image: url(imagens/bdtopo.gif); background-position: bottom; background-repeat: repeat-x;">
				<TR>
					<TD CLASS="tbl_menu" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('index.php','_self');">Início</TD>
					<TD CLASS="tbl_menu" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('empresa.php','mainFrame');">Empresa</TD>
					<TD CLASS="tbl_menu" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('secoes.php','mainFrame');">Produtos</TD>
					<TD CLASS="tbl_menu" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('lancamentos.php','_blank');">Lançamentos</TD>
					<TD CLASS="tbl_menu" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('eventos.php','mainFrame');">Eventos</TD>
					<TD CLASS="tbl_menu" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('fale_conosco.php','mainFrame');">Fale Conosco</TD>
					<TD CLASS="tbl_menu" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('cadastro.php','mainFrame');">Cadastre-se</TD>
					<TD CLASS="tbl_menu" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('parceiros.php','mainFrame');">Parceiros</TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
</TABLE>
<DIV STYLE="position: absolute; top: 0px; z-index: 1; text-align: right; width: 100%;"><IMG SRC="imagens/chaves.gif" STYLE="filter: Alpha(Opacity=0, FinishOpacity=0, Style=10, StartX=10, StartY=100, FinishX=10, FinishY=100);" onMouseOver="segredo_sobre(this);" onMouseOut="segredo_sai(this);" onClick="senha();"></DIV>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
