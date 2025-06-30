<?
$ip = trim($_SERVER['REMOTE_USER']);
$pg = basename(@$_SERVER['PHP_SELF']);

if (!@mysql_error()) {
	$msg .= mysql_error($conexao);
}

$sql_log = "INSERT INTO LOG (PG,IP,DIA,MES,ANO,HORA,MINUTO,SEGUNDO,MSG) VALUES ($pg,'$ip',$dia,$mes,$ano,$hora,$minuto,$segundo,'$msg')";
if(@mysql_query($sql_inserir,$conexao)) {
	$msg .= 'Ocorreu um erro ao iniciar LOG.';
}
?>
