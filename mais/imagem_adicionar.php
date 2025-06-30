<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('../msg.php'); ?>
<?
$id_evento = trim(@$_POST['HDN_ID_EVENTO']);
$id_produto = trim(@$_POST['HDN_ID_PRODUTO']);
$pg = trim(@$_POST['HDN_PG']);
$dir_img = trim(@$_POST['HDN_DIR']);
$id_diretorio = trim(@$_POST['HDN_ID_DIRETORIO']);

$upload_dir = "../$dir_img/";
$nome_arquivo = $_FILES['file_img']['name'];
$upload_file = $upload_dir . $nome_arquivo;
$upload_temp = $_FILES['file_img']['tmp_name'];

if (move_uploaded_file($upload_temp, $upload_file)) {
    $msg .= "O arquivo [$nome_arquivo] é valido e foi carregado com sucesso.";

	$sql_inserir = "INSERT INTO IMAGENS (ID_DIRETORIO,ARQUIVO) VALUES ($id_diretorio,'$nome_arquivo')";
	if(@mysql_query($sql_inserir,$conexao)) {
	    $msg .= "O arquivo [$nome_arquivo] foi adicionado com sucesso no banco de dados.";
	}
} else {
    $msg .= "O arquivo [$nome_arquivo] é valido, porém não foi carregado com sucesso.";
}

if ($id_evento != '') {
	$str_id = '&id_evento=' . urlencode($id_evento);
}
if ($id_produto != '') {
	$str_id = '&id_produto=' . urlencode($id_produto);
}
//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
header("Location: $pg?msg=" . urlencode($msg) . $str_id . '&nome_arquivo=' . urlencode($nome_arquivo) . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
