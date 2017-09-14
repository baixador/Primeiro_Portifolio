<html>
<meta charset="utf-8" lang="pt-br">
<body>
<?php

   
$quebra_linha ="\r\n";
$emailsender ="contato@faccinaequipments.com.br";
$nomeremetente =$_POST['Cmail'];
$phone =$_POST['telefone'];
$emaildestinatario ="sampaio-lima2010@bol.com.br,
contato@faccinaequipments.com.br";
$assunto =$_POST['Cnome'];
$mensagem =$_POST['Ftexto'];

$mensagemHTML = $assunto .$quebra_linha
.'<br><br>'.$nomeremetente.'<br><br>'.$phone.'<p><i>'.$mensagem.'</i></p>';


$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " .$emailsender .$quebra_linha;
$headers .= "Reply-To: ".$emailsender .$quebra_linha;

mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r"
.$emailsender);

print "Mensagem enviada com sucesso!"
        
?>
</body>
</html>