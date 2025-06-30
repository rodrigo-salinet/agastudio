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
	obj.style.backgroundColor = '#CCCCCC';
	obj.style.cursor = 'hand';
}
function mouse_sai(obj) {
	obj.style.backgroundColor = '';
	obj.style.cursor = '';
}
function adicionar(frm) {
	var file_img = document.getElementById('file_img');
	if (trim(file_img.value) != '') {
		return frm.submit();
	} else {
		alert('Selecione primeiro o arquivo clicando no botão "Procurar..." para localizar o arquivo antes de enviar.');
		file_img.focus();
		return false;
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem" STYLE="background-color: #FFFFFF;">
<? require_once('../frm_html.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('../msg.php'); ?>
<TABLE CLASS="tbl">
	<TR>
<?
$id_categoria = trim(@$_GET['id_categoria']);
$sql_categoria = "SELECT * FROM CATEGORIAS WHERE ID=$id_categoria";
$categoria = mysql_query($sql_categoria,$conexao);
?>
		<TD><A HREF="categorias.php">Início</A> - <?=mysql_result($categoria,0,'NOME');?></TD>
	</TR>
	<TR>
		<TD STYLE="text-align: center;"><H1><?=mysql_result($categoria,0,'NOME');?></H1><BR>
			Imagem:
			<FORM ACTION="produto_adicionar.php" ENCTYPE="MULTIPART/FORM-DATA" METHOD="POST" NAME="frm_novo_produto" ID="frm_novo_produto" onSubmit="return adicionar(this);">
				<INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" ID="MAX_FILE_SIZE" VALUE="2000000">
				<INPUT TYPE="HIDDEN" NAME="HDN_ID_CATEGORIA" ID="HDN_ID_CATEGORIA" VALUE="<?=$id_categoria;?>">
				<INPUT TYPE="FILE" NAME="file_img" ID="file_img" STYLE="width: 50%;"><BR>
				<INPUT TYPE="SUBMIT" VALUE="Novo(a)">
			</FORM>
		</TD>
	</TR>
	<TR>
		<TD STYLE="width: 100%; height: 100%; text-align: center; vertical-align: middle;">
			<TABLE STYLE="width: 90%; vertical-align: middle;">
<?
$sql_produtos = "SELECT * FROM PRODUTOS WHERE ID_CATEGORIA=$id_categoria";
$produtos = mysql_query($sql_produtos,$conexao);
for ($n = 0; $n < @mysql_num_rows($produtos); $n++) {
?>
				<TR>
<?
	$id_img = @mysql_result($produtos,$n,'ID_IMAGEM');
	$sql_imagem = "SELECT * FROM IMAGENS WHERE ID=$id_img";
	$imagem = mysql_query($sql_imagem,$conexao);

	$tam_img_tmp = array(1,1);
	if (trim(@mysql_result($imagem,0,'ARQUIVO')) != '') {
		$link_img_tmp = '../fotos_moveis/' . @mysql_result($imagem,0,'ARQUIVO');
		@mysql_free_result($imagem);
		$tam_img_tmp = miniatura($link_img_tmp);
	}
?>
					<TD CLASS="produtos" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onDblClick="abrir_janela('produto.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>','_self');"><IMG STYLE="border: 0px; width: <?=$tam_img_tmp[0];?>px; height: <?=$tam_img_tmp[1];?>px;" SRC="<?=$link_img_tmp;?>"><BR>
						<?=mysql_result($produtos,$n,'NOME');?><BR>
						<SPAN STYLE="color: #FF0000; font-weight: bold;" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('produto_excluir.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>&id_categoria=<?=$id_categoria;?>','_self');" TITLE="Excluir">X</SPAN></TD>
<?	if (($n + 1) == @mysql_num_rows($produtos)) { ?>
					<TD COLSPAN="2">&nbsp;</TD>
<?
	} else {
		$n++;

		$id_img = @mysql_result($produtos,$n,'ID_IMAGEM');
		$sql_imagem = "SELECT * FROM IMAGENS WHERE ID=$id_img";
		$imagem = mysql_query($sql_imagem,$conexao);
	
		$tam_img_tmp = array(1,1);
		if (trim(@mysql_result($imagem,0,'ARQUIVO')) != '') {
			$link_img_tmp = '../fotos_moveis/' . @mysql_result($imagem,0,'ARQUIVO');
			@mysql_free_result($imagem);
			$tam_img_tmp = miniatura($link_img_tmp);
		}
?>
					<TD CLASS="produtos" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onDblClick="abrir_janela('produto.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>','_self');"><IMG STYLE="border: 0px; width: <?=$tam_img_tmp[0];?>px; height: <?=$tam_img_tmp[1];?>px;" SRC="<?=$link_img_tmp;?>"><BR>
						<?=mysql_result($produtos,$n,'NOME');?><BR>
						<SPAN STYLE="color: #FF0000; font-weight: bold;" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('produto_excluir.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>&id_categoria=<?=$id_categoria;?>','_self');" TITLE="Excluir">X</SPAN></TD>
<?		if (($n + 1) == @mysql_num_rows($produtos)) { ?>
					<TD>&nbsp;</TD>
<?
		} else {
			$n++;

			$id_img = @mysql_result($produtos,$n,'ID_IMAGEM');
			$sql_imagem = "SELECT * FROM IMAGENS WHERE ID=$id_img";
			$imagem = mysql_query($sql_imagem,$conexao);
		
	$tam_img_tmp = array(1,1);
	if (trim(@mysql_result($imagem,0,'ARQUIVO')) != '') {
		$link_img_tmp = '../fotos_moveis/' . @mysql_result($imagem,0,'ARQUIVO');
		@mysql_free_result($imagem);
		$tam_img_tmp = miniatura($link_img_tmp);
	}
?>
					<TD CLASS="produtos" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onDblClick="abrir_janela('produto.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>','_self');"><IMG STYLE="border: 0px; width: <?=$tam_img_tmp[0];?>px; height: <?=$tam_img_tmp[1];?>px;" SRC="<?=$link_img_tmp;?>"><BR>
						<?=mysql_result($produtos,$n,'NOME');?><BR>
						<SPAN STYLE="color: #FF0000; font-weight: bold;" onMouseOver="mouse_sobre(this);" onMouseOut="mouse_sai(this);" onClick="abrir_janela('produto_excluir.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>&id_categoria=<?=$id_categoria;?>','_self');" TITLE="Excluir">X</SPAN></TD>
				</TR>
<?
		}
	}
 }
?>
			</TABLE>
		</TD>
	</TR>
</TABLE>
<? require_once('../menu_contexto.php'); ?>
<? require_once('../script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
