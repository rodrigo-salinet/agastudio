<OBJECT ID="dlgHelper" CLASSID="clsid:3050f819-98b5-11cf-bb82-00aa00bdce0b" WIDTH="0px" HEIGHT="0px"></OBJECT>
<DIV ID="div_menu_contexto" CLASS="menu_contexto" onMouseMove="mover();">
	<TABLE STYLE="border: 1px dashed #0000FF; width: 0.01%;">
		<TR onMouseOver="this.style.backgroundColor = '#EEEEEE';" onMouseOut="this.style.backgroundColor = '';" onClick="window.print();">
			<TD CLASS="cel_menu_contexto"><IMG SRC="imagens/impressora.gif"></TD>
			<TD CLASS="cel_menu_contexto">Imprimir</TD>
		</TR>
		<TR onMouseOver="this.style.backgroundColor = '#EEEEEE';" onMouseOut="this.style.backgroundColor = '';" onClick="muda_cor_fundo();">
			<TD CLASS="cel_menu_contexto"><IMG SRC="imagens/monitor_pincel.gif"></TD>
			<TD CLASS="cel_menu_contexto">Cor Fundo</TD>
		</TR>
		<TR onMouseOver="this.style.backgroundColor = '#EEEEEE';" onMouseOut="this.style.backgroundColor = '';" onClick="muda_cor_letra();">
			<TD CLASS="cel_menu_contexto"><IMG SRC="imagens/tt.gif"></TD>
			<TD CLASS="cel_menu_contexto">Cor Fonte</TD>
		</TR>
		<TR onMouseOver="this.style.backgroundColor = '#EEEEEE';" onMouseOut="this.style.backgroundColor = '';" onClick="mostrar_obj();">
			<TD CLASS="cel_menu_contexto"><IMG SRC="imagens/seta.gif"></TD>
			<TD CLASS="cel_menu_contexto">Mostrar</TD>
		</TR>
		<TR onMouseOver="this.style.backgroundColor = '#EEEEEE';" onMouseOut="this.style.backgroundColor = '';" onClick="ocultar_obj();">
			<TD CLASS="cel_menu_contexto"><IMG SRC="imagens/bola_cortada.gif"></TD>
			<TD CLASS="cel_menu_contexto">Ocultar</TD>
		</TR>
		<TR onMouseOver="this.style.backgroundColor = '#EEEEEE';" onMouseOut="this.style.backgroundColor = '';" onClick="window.external.AddFavorite(location.href,document.title);">
			<TD CLASS="cel_menu_contexto"><IMG SRC="imagens/estrela.gif"></TD>
			<TD CLASS="cel_menu_contexto">Favoritos</TD>
		</TR>
		<TR onMouseOver="this.style.backgroundColor = '#EEEEEE';" onMouseOut="this.style.backgroundColor = '';" onClick="history.go(0);">
			<TD CLASS="cel_menu_contexto"><IMG SRC="imagens/setas.gif"></TD>
			<TD CLASS="cel_menu_contexto">Atualizar</TD>
		</TR>
		<TR onMouseOver="this.style.backgroundColor = '#EEEEEE';" onMouseOut="this.style.backgroundColor = '';" onClick="ver_html();">
			<TD CLASS="cel_menu_contexto"><IMG SRC="imagens/papel_A.gif"></TD>
			<TD CLASS="cel_menu_contexto">HTML</TD>
		</TR>
<?
$endereco = $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
if (count($_GET) > 0) {
	$endereco = $endereco . '?' . @$_SERVER['QUERY_STRING'];
}
?>
		<TR onMouseOver="this.style.backgroundColor = '#EEEEEE';" onMouseOut="this.style.backgroundColor = '';" onClick="alert('http://<?=$endereco;?>');">
			<TD CLASS="cel_menu_contexto"><IMG SRC="imagens/papel_bola_interrogacao.gif"></TD>
			<TD CLASS="cel_menu_contexto">Endereço</TD>
		</TR>
	</TABLE>
</DIV>
