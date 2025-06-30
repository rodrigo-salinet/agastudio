<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: A.G.A. Studio ::.</TITLE>
<LINK HREF="../estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="../javascript.js"></SCRIPT>
</HEAD>
<BODY CLASS="rolagem" STYLE="background-color: #FFFFFF;">
<? require_once('../frm_html.php'); ?>
<? require_once('../msg.php'); ?>
<? @session_destroy(); ?>
<TABLE CLASS="tbl">
	<TR>
		<TD STYLE="text-align: right; color: #000000;" onMouseOver="this.style.cursor = 'hand';" onMouseOut="this.style.cursor = '';" onClick="self.close();">x Fechar x</TD>
	</TR>
	<TR>
		<TD STYLE="width: 100%; height: 100%; text-align: center; vertical-align: middle;">
			<FORM ACTION="logar.php" ID="frm_login" METHOD="POST" NAME="frm_login">
			<TABLE ALIGN="CENTER">
				<TR>
					<TD CLASS="td_login">Usuário(a):</TD>
					<TD><INPUT CLASS="td_login" TYPE="TEXT" NAME="txt_usuario" ID="txt_usuario" TITLE="Usuaário(a)"></TD>
				<TR>
				<TR>
					<TD CLASS="td_login">Senha:</TD>
					<TD><INPUT CLASS="td_login" TYPE="PASSWORD" NAME="txt_senha" ID="txt_senha" TITLE="Senha"></TD>
				<TR>
				<TR>
					<TD COLSPAN="2" STYLE="text-align: center;"><INPUT CLASS="td_login" TYPE="SUBMIT" VALUE="Entrar"> <INPUT CLASS="td_login" TYPE="RESET" VALUE="Cancelar"></TD>
				<TR>
			</TABLE>
			</FORM>
		</TD>
	</TR>
</TABLE>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">document.getElementById('txt_usuario').focus();</SCRIPT>
<? require_once('../menu_contexto.php'); ?>
<? require_once('../script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
