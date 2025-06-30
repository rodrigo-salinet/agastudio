<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: A.G.A. Studio ::.</TITLE>
<LINK HREF="../estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="../javascript.js"></SCRIPT>
</HEAD>
<BODY SCROLL="NO">
<? require_once('../frm_html.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('../msg.php'); ?>
<BR>
<DIV CLASS="nome_pag">Alterar Senha</DIV>
<FORM ACTION="senha_alterar.php" ID="frm_login" METHOD="POST" NAME="frm_login">
<TABLE ALIGN="CENTER">
	<TR>
		<TD STYLE="text-align: right;">Usuário:</TD>
		<TD><INPUT NAME="txt_usuario" TYPE="TEXT" CLASS="txt" ID="txt_usuario" VALUE="<?=@$_SESSION['usuario'];?>"></TD>
	</TR>
	<TR>
		<TD STYLE="text-align: right;">Senha:</TD>
		<TD><INPUT ID="txt_senha" NAME="txt_senha" TYPE="PASSWORD" CLASS="txt"></TD>
	</TR>
	<TR>
		<TD COLSPAN="2" ALIGN="CENTER"><INPUT TYPE="SUBMIT" VALUE="Ok"><INPUT TYPE="RESET" VALUE="Cancelar"></TD>
	</TR>
</TABLE>
</FORM>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">document.getElementById('txt_senha').focus();</SCRIPT>
<? require_once('../menu_contexto.php'); ?>
<? require_once('../script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
