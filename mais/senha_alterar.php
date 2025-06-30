<? require_once('../funcoes.php'); ?>
<? require_once('../script_inicio.php'); ?>
<? require_once('sessao.php'); ?> 
<?
$txt_usuario = trim(@$_POST['txt_usuario']);
$txt_senha = trim(@$_POST['txt_senha']);

$sql_update = "UPDATE USUARIOS SET SENHA='" . md5($txt_senha) . "' WHERE ID=$id_usuario";
if (@mysql_query($sql_update,$conexao)) {
	$msg = 'Senha alterada com sucesso.';
} else {
	$msg = 'Ocorreu um problema ao alterar a senha.';
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

$_SESSION['senha'] = md5($txt_senha);

header("Location: senha.php?msg=" . urlencode($msg));
?>
