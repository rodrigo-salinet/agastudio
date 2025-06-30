<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<?
$id_categoria = trim(@$_POST['HDN_ID_CATEGORIA']);

$upload_dir = '../fotos_moveis/';
$upload_file = $upload_dir . $_FILES['file_img']['name'];
$nome_arquivo = $_FILES['file_img']['name'];

$nome_ext = explode('.',$nome_arquivo);
@array_splice($nome_ext,count($nome_ext) - 1);
for ($n = 0; $n < count($nome_ext); $n++) {
	if (trim($nome_ext[$n]) == '') {
		@array_splice($nome_ext,$n);
	}
}
$str_nome_arq = $nome_ext[0];
if (count($nome_ext) >= 2) {
	$str_nome_arq = implode('.',$nome_ext);
}

$sql_produtos = "SELECT * FROM PRODUTOS WHERE NOME LIKE '%$str_nome_arq%'";
$produtos = @mysql_query($sql_produtos,$conexao);

if (@mysql_num_rows($produtos) == 0) {
	if (move_uploaded_file($_FILES['file_img']['tmp_name'], $upload_dir . $_FILES['file_img']['name'])) {
		$msg .= "O arquivo [$nome_arquivo] é valido e foi carregado com sucesso.";
	
		$sql_imagens = "SELECT * FROM IMAGENS WHERE ARQUIVO LIKE '%$nome_arquivo%'";
		$imagens = @mysql_query($sql_imagens,$conexao);
		if (@mysql_num_rows($imagens) == 0) {
			$sql_inserir = "INSERT INTO IMAGENS (ARQUIVO) VALUES ('$nome_arquivo')";
			if(@mysql_query($sql_inserir,$conexao)) {
				$msg .= "O arquivo [$nome_arquivo] foi adicionado com sucesso no banco de dados.";
			}
		} else {
			$msg .= "O arquivo [$nome_arquivo] já consta no banco de dados.";
		}
	} else {
		$msg .= "O arquivo [$nome_arquivo] é valido, porém não foi carregado com sucesso.";
	}

	$sql_imagem = "SELECT * FROM IMAGENS WHERE ARQUIVO LIKE '%$nome_arquivo%'";
	$imagem = @mysql_query($sql_imagem,$conexao);
	$id_imagem = @mysql_result($imagem,0,'ID');

	$sql_adicionar = "INSERT INTO PRODUTOS (ID_CATEGORIA,ID_IMAGEM,NOME) VALUES ($id_categoria,$id_imagem,'$str_nome_arq')";
	if (@mysql_query($sql_adicionar,$conexao)) {
		$msg .= "Produto adicionado com sucesso.";
	} else {
		$msg .= "Produto não adicionado com sucesso.";
	}
} else {
	$msg .= "Nome do produto já consta no banco de dados.";
}

//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
header("Location: produtos.php?msg=" . urlencode($msg) . "&id_categoria=$id_categoria" . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
