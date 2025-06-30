<?
@ob_start();
@session_start();

$hoje = date('d/m/Y');
$horario = date('H:i:s');

$dias_semana = array('Domingo','Segunda-Feira','Terça-Feira','Quarta-Feira','Quinta-Feira','Sexta-Feira','Sábado');
$dia_semana = $dias_semana[date('w')];
$dia = date('d');
$meses = array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
$mes = date('m');
$ano = date('Y');
$hora = date('H');
$minuto = date('i');
$segundo = date('s');

$host = 'localhost';
$db = 'agastudiomoveis';
$usuario = 'agastudiomoveis';
$senha = 'h80p54';
if ($_SERVER['SERVER_NAME'] == 'localhost') {
	$db = 'agastudio';
	$usuario = 'root';
	$senha = '123456';
}

$conexao = mysql_connect($host,$usuario,$senha);

@mysql_select_db($db,$conexao);

$sql_tbl_status = "SHOW TABLE STATUS FROM $db";
$tbl_status = mysql_query($sql_tbl_status,$conexao);

$msg = '';
if(trim(@$_GET['msg']) != '') {
	$msg = $_GET['msg'] . '\n';
}

$sep_valores = '¨';
if (isset($_GET['sep_valores']) == true) {
	$sep_valores = trim($_GET['sep_valores']);
}

$dir_adm = 'adm';
$dir_imagens = 'imagens';

$sep_diretorio = DIRECTORY_SEPARATOR;

$dir_atual = stripslashes($_SERVER['PHP_SELF']);
$dir_atual = str_replace('/',$sep_diretorio,$dir_atual);
$dir_atual = str_replace(chr(92),$sep_diretorio,$dir_atual); // '\'

$dir_atual = explode($sep_diretorio,str_replace(basename($dir_atual),'',$dir_atual));
for ($i = 0; $i < count($dir_atual); $i++) {
	if (trim($dir_atual[$i]) == '') {
		unset($dir_atual[$i]);
	}
}
$dir_atual = strval($dir_atual[(count($dir_atual) - 1)]);

$dir_raiz = str_replace(basename(__FILE__),'',__FILE__);
$str_dir_raiz = $dir_raiz;
$dir_raiz = opendir($dir_raiz);
$sub_diretorios = array();
$i = 0;
while (false !== ($conteudo = readdir($dir_raiz))) {
	if (is_file($str_dir_raiz . $conteudo) == false) {
		if ($conteudo != '.' && $conteudo != '..') {
			$sub_diretorios[$i] = strval($conteudo);
			$i++;
		}
	}
}
closedir($dir_raiz);

sort($sub_diretorios,SORT_STRING);

$dir_anterior = '';
for ($n = 0; $n < count($sub_diretorios); $n++) {
	if ($dir_atual == $sub_diretorios) {
		$dir_anterior = '../';
	}
}

$reg_por_pag = 9;
$pg = trim(@$_GET['pg']);
if ($pg == '') {
	$pg = 1;
}
?>
