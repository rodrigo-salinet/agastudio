<?
// Fecha consulta do STATUS do banco de dados:
@mysql_free_result($tbl_status);

// Fecha conexao com o banco de dados:
@mysql_close($conexao);

if (trim(@$msg) != '') {
?>
<script language="JAVASCRIPT" type="TEXT/JAVASCRIPT">alert('<?=$msg;?>');</script>
<?
}
//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
?>
