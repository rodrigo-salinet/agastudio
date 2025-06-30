<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<?
$sel_motivo = trim(@$_POST['sel_motivo']);
$sql_motivo = "SELECT * FROM MOTIVOS WHERE ID=$sel_motivo";
$motivo = mysql_query($sql_motivo,$conexao);
$nome_motivo = @mysql_result($motivo,0,'NOME');

$txt_nome = trim(@$_POST['txt_nome']);
$txt_ddd_fone = trim(@$_POST['txt_ddd_fone']);
$txt_fone = trim(@$_POST['txt_fone']);
$txt_email = trim(@$_POST['txt_email']);
$sel_email = trim(@$_POST['sel_email']);
$txt_texto = trim(@$_POST['txt_texto']);

$para = '"A.G.A. Studio Móveis" <agastudio@sercomtel.com.br>';
$de = '"www.agastudiomoveis.com.br" <fale_conosco@agastudiomoveis.com.br>';
$titulo = 'Fale Conosco - A.G.A. Studio Móveis';
$html  = "<HTML>\n";
$html .= "	<BODY>\n";
$html .= "		Nome: $txt_nome.<BR>\n";
$html .= "		E-Mail: $txt_email.<BR>\n";
$html .= "		Deseja receber notícias da AGA?: $sel_email.<BR>\n";
$html .= "		Fone para contato: ($txt_ddd_fone)$txt_fone.<BR>\n";
$html .= "		Motivo: $nome_motivo.<BR>\n";
$html .= "		Texto: $txt_texto.<BR>\n";
$html .= "	</BODY>\n";
$html .= "</HTML>";

ini_set('SMTP','smtp.sercomtel.com.br');
ini_set('smtp_port','25');

if (@mail(
	$para, // Destinatário.
	$titulo, // Título do email.
	$html, // Corpo da página em HTML.
	"Reply-To: $de \r\n" . // Responder para...
	"From: $de \r\n" . // Remetente.
	"Organization: A.G.A. Studio Móveis \r\n" . // Empresa.
	"Content-Type: text/html \r\n" . // Tipo de email.
	"X-Priority: 3 \r\n" . // Prioridade de envio. (1 = Baixa[Sem pressa], 2 = Média[Normal], 3 = Alta[Urgente])
	"X-MSMail-Priority: Normal \r\n" . // Prioridade de envio.
	"X-Mailer: " . _str_titulo . "\r\n" . // Programa que enviou.
	"Disposition-Notification-To: $de \r\n" . // Notificação de leitura.
	'Bcc: "Administrador do sistema" <rodrigosalinet@hotmail.com>' // Cópia oculta.
) == true) {
	$msg .= "<H1>O email:</H1><BR>\n" . 
		"<BR>\n" . 
		"<B>\n" . 
		$html . 
		"\n</B>\n" . 
		"<BR>\n" . 
		"<BR>\n" . 
		"<H1>foi enviado com sucesso.</H1>"
	;
} else {
	$msg .= 'Não foi possível enviar o email.';
}

$sql_inserir = "INSERT INTO FALE_CONOSCO (ID_MOTIVO,NOME,DDD_FONE,FONE,EMAIL,RECEBE_EMAIL,TEXTO,DIA,MES,ANO,HORA,MINUTO,SEGUNDO) VALUES ($sel_motivo,'$txt_nome',$txt_ddd_fone,$txt_fone,'$txt_email','$sel_email','$txt_texto',$dia,$mes,$ano,$hora,$minuto,$segundo)";
if(@mysql_query($sql_inserir,$conexao)) {
	$msg .= "Obrigado(a) por se comunicar conosco.";
	if ($sel_email == 'S') {
		$msg .= " Em breve enviaremos notícias exclusivas para você.";
	}
}

//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
header("Location: fale_conosco.php?msg=" . urlencode($msg) . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
?>
<? while(@ob_end_flush()); ?>
