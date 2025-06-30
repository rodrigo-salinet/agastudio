<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<?
$txt_nome = trim(@$_POST['txt_nome']);
$txt_fone = trim(@$_POST['txt_fone']);
$txt_ddd_fone = trim(@$_POST['txt_ddd_fone']);
$txt_email = trim(@$_POST['txt_email']);
$sel_email = trim(@$_POST['sel_email']);
$txt_dia_nascimento = trim(@$_POST['txt_dia_nascimento']);
$txt_mes_nascimento = trim(@$_POST['txt_mes_nascimento']);
$txt_ano_nascimento = trim(@$_POST['txt_ano_nascimento']);
$txt_profissao = trim(@$_POST['txt_profissao']);
$txt_comentario = trim(@$_POST['txt_comentario']);

$sql_inserir = "INSERT INTO CLIENTES (NOME,DDD_FONE,FONE,EMAIL,RECEBE_EMAIL,COMENTARIO,DIA_NASCIMENTO,MES_NASCIMENTO,ANO_NASCIMENTO,DIA,MES,ANO,HORA,MINUTO,SEGUNDO,PROFISSAO) VALUES ('$txt_nome',$txt_ddd_fone,$txt_fone,'$txt_email','$sel_email','$txt_comentario',$txt_dia_nascimento,$txt_mes_nascimento,$txt_ano_nascimento,$dia,$mes,$ano,$hora,$minuto,$segundo,'$txt_profissao')";
if(@mysql_query($sql_inserir,$conexao)) {
	$msg .= "Obrigado(a) por se cadastrar em nosso site.";
	if ($sel_email == 'S') {
		$msg .= " Em breve enviaremos notícias exclusivas para você.";
	}
}

echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
//header("Location: cadastro.php?msg=" . urlencode($msg) . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
