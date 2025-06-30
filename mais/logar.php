<?
@session_start();

$txt_usuario = trim(@$_POST['txt_usuario']);
$txt_senha = trim(@$_POST['txt_senha']);

$_SESSION['usuario'] = $txt_usuario;
$_SESSION['senha'] = md5($txt_senha);

$pag = trim(@$_GET['pag']);
if ($pag == '') {
	$pag = 'menu.php';
}

header("Location: " . $pag);
?>
