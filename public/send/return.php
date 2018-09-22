<?php

error_reporting(0);

header ('Content-type: text/html; charset=UTF-8');

if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}

// Se nenhum valor foi recebido, o usuário não realizou o captcha
if (!$captcha_data) {
    echo "<script>alert(\"Usuário mal intencionado detectado. A mensagem não foi enviada. Confirme sua identidade no RECAPTCHA GOOGLE!\")</script>";
    echo "<script>window.location = \"/contatos\"</script>";
    return;
}


$titleemail = "Pré-Inscrição - ROMA CONCURSOS";

$inc_nome          = strip_tags(trim(ucwords($_POST['inc_nome'])));
$inc_email         = strip_tags(trim(ucwords($_POST['inc_email'])));
$inc_telefone      = strip_tags(trim($_POST['inc_telefone']));
$inc_curso         = strip_tags(trim(ucwords($_POST['inc_curso'])));

$ip                = $_SERVER['REMOTE_ADDR'];
$tempo             = date("d/m/Y - H:i:s");

$mensagemHTML =
    '
<p>
<img src="https://romaconcursos.com.br/images/css/logo_az.png" width="400" /><br>
<br>
<br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 15px;">PRÉ-INSCRIÇÃO</span></br><br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 11px;"><b>www.romaconcursos.com.br</b></span></br>
<br>
<br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;">Nome:</span></br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;"><b>'.$inc_nome.'</b></span></br>
<br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;">E-mail:</span></br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;"><b>'.$inc_email.'</b></span></br>
<br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;">Telefone/Whatsapp:</span></br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;"><b>'.$inc_telefone.'</b></span></br>
<br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;">Preparatorio escolhido:</span></br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;"><b>'.$inc_curso.'</b></span></br>
<br>
<br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;">Contato Enviado do IP:</span></br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;"><b>'.$ip.'</b></span></br>
<br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;">Data & Hora do Envio:</span></br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 12px;"><b>'.$tempo.'</b></span></br>
<br>
<br>
<span style="color: #9A9A9A; font-family: Segoe, Verdana, sans-serif; font-size: 9px;">9 Clicks developers Tecnologia em Desenvolvimento e Hospedagem para Sites.</span><br>
<span style="color: #A6D2FF; font-family: Verdana; font-size: 9px;">Suporte:<b> contato@9clicks.com.br | www.9clicks.com.br</b> - Ipatinga/MG.</span>
</p>

';

$emaildestinatario = 'contato@romaconcursos.com.br';

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $inc_email\r\n"; // remetente
$headers .= "Bcc: $inc_email\r\n";
$headers .= "Cc: rodrigomanhaes91@hotmail.com\r\n";
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$resposta = mail($emaildestinatario, $titleemail, $mensagemHTML, $headers);

$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le9hHEUAAAAAN73vkRcsPyxIOLu07lY89vhz5T2&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);
if ($resposta.success) {
    echo "<script>alert(\"$inc_nome, Agradecemos pela sua pré-inscrição, em breve estaremos entrando em contato para concluir sua inscrição no curso desejado!\")</script>";
    echo "<script>window.location = \"/.\"</script>";
} else {
    echo "Usuário mal intencionado detectado. A mensagem não foi enviada.";
    echo "<script>window.location = \"/\"</script>";

}

?>