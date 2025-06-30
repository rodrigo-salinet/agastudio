<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: A.G.A. Studio ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<STYLE TYPE="TEXT/CSS">
body {
	background-image: url(imagens/fundo3.gif);
	background-position: top;
	background-repeat: repeat-x;
}
</STYLE>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
</HEAD>
<BODY SCROLL="NO" onLoad="ver_hoje();">
<? require_once('frm_html.php'); ?>
<? require_once('msg.php'); ?>
<TABLE CLASS="tbl">
	<TR>
		<TD STYLE="width: 100%; height: 100%; vertical-align: middle; text-align: center; padding: 7%;">
			<OBJECT CLASSID="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" CODEBASE="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" WIDTH="100%" HEIGHT="100%" TITLE="Entrar" ALIGN="middle" STYLE="vertical-align: middle;">
				<PARAM NAME="movie" VALUE="flash/logo.swf">
				<PARAM NAME="quality" VALUE="high">
				<PARAM NAME="allowScriptAccess" VALUE="sameDomain" />
				<PARAM NAME="allowFullScreen" VALUE="false" />
				<PARAM NAME="menu" VALUE="false" />
				<PARAM NAME="wmode" VALUE="transparent" />
				<PARAM NAME="bgcolor" VALUE="#000000" />
				<embed src="flash/logo.swf" menu="false" quality="high" wmode="transparent" bgcolor="#000000" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" name="logo" align="middle" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" WIDTH="100%" HEIGHT="100%">
				</EMBED>
			</OBJECT>
		</TD>
		<TD STYLE="width: 100px; height: 100%; vertical-align: middle; background-color: #000000;">
			<OBJECT CLASSID="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" CODEBASE="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" WIDTH="100px" HEIGHT="100%" TITLE="Slogan" ALIGN="RIGHT">
				<PARAM NAME="movie" VALUE="flash/moveis_contemporaneos.swf">
				<PARAM NAME="quality" VALUE="high">
				<PARAM NAME="allowScriptAccess" VALUE="sameDomain" />
				<PARAM NAME="allowFullScreen" VALUE="false" />
				<PARAM NAME="menu" VALUE="false" />
				<PARAM NAME="wmode" VALUE="transparent" />
				<PARAM NAME="bgcolor" VALUE="#000000" />
				<embed src="flash/moveis_contemporaneos.swf" menu="false" wmode="transparent" quality="high" bgcolor="#000000" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" name="logo" align="right" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" WIDTH="100px" HEIGHT="100%">
				</EMBED>
			</OBJECT>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN="2" STYLE="text-align: center;"><? require_once('contador.php'); ?></TD>
	</TR>
	<TR>
		<TD COLSPAN="2" STYLE="text-align: center; font-size: 9px; filter: Glow(Color=#000000, Strength=2); width: 100%; height: 0.01%;" TITLE="Nota de rodapé.">A.G.A. Studio Móveis - Copyright <SUP>&copy; 2008</SUP> - Todos os direitos reservados ao(à) autor(a). <SPAN CLASS="saudacao" ID="saudacao" TITLE="Saudação."></SPAN></TD>
	</TR>
</TABLE>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
