<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: A.G.A. Studio ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('msg.php'); ?>
<BR>
<BR>
<FORM ACTION="cadastrar.php" ID="frm_cadastro" NAME="frm_cadastro" METHOD="POST">
<TABLE ALIGN="CENTER">
	<TR>
		<TD COLSPAN="2" STYLE="text-align: center;"><H1>Cadastro</H1></TD>
	</TR>
	<TR>
		<TD COLSPAN="2" STYLE="text-align: center;"><H3>Preencha os campos abaixo:</H3></TD>
	</TR>
	<TR>
		<TD STYLE="text-align: right;">Nome: <SPAN STYLE="color: #FF0000;" TITLE="Campo obrigatório.">*</SPAN></TD>
		<TD><INPUT CLASS="fale_conosco" TYPE="TEXT" NAME="txt_nome" ID="txt_nome" STYLE="width: 100%;"></TD>
	</TR>
	<TR>
		<TD STYLE="text-align: right;">E-Mail: <SPAN STYLE="color: #FF0000;" TITLE="Campo obrigatório.">*</SPAN></TD>
		<TD><INPUT CLASS="fale_conosco" TYPE="TEXT" NAME="txt_email" ID="txt_email" STYLE="width: 100%;"></TD>
	</TR>
	<TR>
		<TD STYLE="text-align: right;">Receber notícias da A.G.A.:</TD>
		<TD>
			<SELECT CLASS="fale_conosco" NAME="sel_email" ID="sel_email" TITLE="Receber Email?">
				<OPTION VALUE="S">Sim</OPTION>
				<OPTION VALUE="N">Não</OPTION>
			</SELECT>
		</TD>
	</TR>
	<TR>
		<TD STYLE="text-align: right;">Fone para contato:</TD>
		<TD>
			(<INPUT CLASS="fale_conosco" TYPE="TEXT" NAME="txt_ddd_fone" ID="txt_ddd_fone" SIZE="3" MAXLENGTH="2" onKeyPress="return filtra_numeros(this);" STYLE="text-align: center;">)
			<INPUT CLASS="fale_conosco" TYPE="TEXT" NAME="txt_fone" ID="txt_fone" SIZE="9" MAXLENGTH="8" onKeyPress="return filtra_numeros(this);" STYLE="text-align: center;">
		</TD>
	</TR>
	<TR>
		<TD STYLE="text-align: right;">Data de nascimento:</TD>
		<TD><INPUT CLASS="fale_conosco" TYPE="TEXT" NAME="txt_dia_nascimento" ID="txt_dia_nascimento" SIZE="3" MAXLENGTH="2" onKeyPress="return filtra_numeros(this);" STYLE="text-align: center;">
			 / 
			 <INPUT CLASS="fale_conosco" TYPE="TEXT" NAME="txt_mes_nascimento" ID="txt_mes_nascimento" SIZE="3" MAXLENGTH="2" onKeyPress="return filtra_numeros(this);" STYLE="text-align: center;">
			 / 
			 <INPUT CLASS="fale_conosco" TYPE="TEXT" NAME="txt_ano_nascimento" ID="txt_ano_nascimento" SIZE="5" MAXLENGTH="4" onKeyPress="return filtra_numeros(this);" STYLE="text-align: center;">
		</TD>
	</TR>
	<TR>
		<TD STYLE="text-align: right;">Profissão:</TD>
		<TD><INPUT CLASS="fale_conosco" TYPE="TEXT" NAME="txt_profissao" ID="txt_profissao" STYLE="width: 100%;"></TD>
	</TR>
	<TR>
		<TD STYLE="text-align: right;">Município / UF:</TD>
		<TD><INPUT CLASS="fale_conosco" TYPE="TEXT" NAME="txt_municipio" ID="txt_municipio" SIZE="70" MAXLENGTH="50"> / <INPUT CLASS="fale_conosco" TYPE="TEXT" NAME="txt_municipio" ID="txt_municipio" SIZE="3" MAXLENGTH="2" STYLE="text-align: center;"></TD>
	</TR>
	<TR>
		<TD STYLE="text-align: right;">Comentário:</TD>
		<TD><TEXTAREA CLASS="fale_conosco" NAME="txt_comentario" ID="txt_comentario" ROWS="5" STYLE="width: 100%;"></TEXTAREA></TD>
	</TR>
	<TR>
		<TD COLSPAN="2" STYLE="text-align: center;"><INPUT TYPE="SUBMIT" VALUE="Enviar" STYLE="color: #000000;"> <INPUT TYPE="RESET" VALUE="Cancelar" STYLE="color: #000000;"></TD>
	</TR>
</TABLE>
</FORM>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">document.getElementById('txt_nome').focus();</SCRIPT>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
