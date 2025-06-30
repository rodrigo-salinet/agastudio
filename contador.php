<?
$ip = $_SERVER['REMOTE_USER'];

$sql_inserir = "INSERT INTO CONTADOR (DIA,MES,ANO,HORA,MINUTO,SEGUNDO,IP) VALUES ($dia,$mes,$ano,$hora,$minuto,$segundo,'$ip')";
if(@mysql_query($sql_inserir,$conexao)) {
	$sql_contador = "SELECT * FROM CONTADOR ORDER BY ID DESC";
	$contador = @mysql_query($sql_contador,$conexao);
	$numeros = strval(@mysql_result($contador,0,'ID'));
	for ($n = 0; $n < strlen($numeros); $n++) {
?>
		<IMG SRC="imagens/<?=substr($numeros,$n,1);?>.GIF" TITLE="<?=$numeros;?> visitantes.">
<?
	}
}
?>