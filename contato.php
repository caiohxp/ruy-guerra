<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Last-Modified" content="Sun, 07 Sep 2014 10:10:10 GMT">
<meta http-equiv="content-type" content="text/html;charset=windows-1252" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3" />
<meta name="robots" content="index,follow" />
<link href="geral.css" rel="stylesheet" type="text/css">
<link href="interna.css" rel="stylesheet" type="text/css">
<title>Ruy Guerra - contato</title>
<script type="text/javascript">
//<![CDATA[
// configura manipuladores de eventos para elementos div
function catchEvent(eventObj, event, eventHandler) {
	if (eventObj.addEventListener) {
		eventObj.addEventListener(event, eventHandler, false);
	} else if (eventObj.attachEvent){
		event = "on" + event;
		eventObj.attachEvent(event, eventHandler);
	}
}
function cancelEvent(event) {
	if (event.preventDefault) {
		event.preventDefault();
		event.stopPropagation();
	} else {
		event.returnValue = false;
		event.cancelBubble = true;
	}
}
catchEvent(window,"load", function() {
	catchEvent(document.getElementById("personData"), "submit", checkForm);
});

function checkForm(evnt) {
	var erro = '';
	var item1 = document.getElementById("adiciona");
	item1.innerHTML = '';
	var br = document.createElement("br");
	item1.appendChild(br);
	var nme = document.getElementById("personData").nome.value;
	if (nme == '') {
		document.getElementById("personData").nome.style.border = "2px solid #003366";
		erro =  "- o campo nome deve ser preenchido";
		var txt = document.createTextNode(erro);
		item1.appendChild(txt);
		var br = document.createElement("br");
		item1.appendChild(br);
		
	}
	else {
		document.getElementById("personData").nome.style.border = "1px solid #8b0000";
	}
	var email = document.getElementById("personData").email.value;
	if (email == '') {
		document.getElementById("personData").email.style.border = '2px solid #003366';
		erro =  "- o campo email deve ser prenchido";
		var txt = document.createTextNode(erro);
		item1.appendChild(txt);
		var br = document.createElement("br");
		item1.appendChild(br);
	} else	if (email != '') {
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!filter.test(email)) {
				document.getElementById("personData").email.style.border = "2px solid #003366";
				erro =  "- o email preenchido não está correto";
				var txt = document.createTextNode(erro);
				item1.appendChild(txt);
				var br = document.createElement("br");
				item1.appendChild(br);
			} else {
				document.getElementById("personData").email.style.border = "1px solid #8b0000";
			}
		}	else {
				document.getElementById("personData").email.style.border = "1px solid #8b0000";
			}
	var mensagem = document.getElementById("personData").mensagem.value;
	if (mensagem == '') {
		document.getElementById("personData").mensagem.style.border = "2px solid #003366";
		erro =  "- o campo mensagem deve ser preenchido";
		var txt = document.createTextNode(erro);
		item1.appendChild(txt);
		var br = document.createElement("br");
		item1.appendChild(br);
	}
	else {
		document.getElementById("personData").mensagem.style.border = "1px solid #8b0000";
	}
	if (erro != '') {
		var theEvent = evnt ? evnt : window.event;
		cancelEvent(theEvent);
	}
}
//]]>		
</script>
<body>

<section class="conteudo">
	<br />
	<img class="ruy" src="images/ruy_guerra.png" alt="Ruy Guerra" title="Ruy Guerra" /><img class="tituloCategoriaV" src="images/contatov.jpg" alt="contato" title="contato" />
	<br class="all" /><br />

<?php

$idioma = $_GET["idioma"];
@$nome = $_POST["nome"];
@$email = $_POST["email"];
@$mensagem = $_POST["mensagem"];
@$quem = $_GET["quem"];

if (isset($email)) {
	
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	$nome = filter_var($nome, FILTER_SANITIZE_STRING);
	$mensagem = filter_var($mensagem, FILTER_SANITIZE_STRING);
	$email_remetente = "conte@ruyguerra.com.br"; // deve ser um email do dominio
	$email_destinatario = "conte@ruyguerra.com.br"; // qualquer email pode receber os dados
	$email_reply = "$email";
	$email_assunto = "Contato via site";
	if ($quem == "vavy") {
		$email_conteudo = "Nome: $nome<br />Email: $email<br /><br />$mensagem<br /><br />Contato original procurando Vavy!";
	} elseif ($quem == "marina") {
		$email_conteudo = "Nome: $nome<br />Email: $email<br /><br />$mensagem<br /><br />Contato original procurando Marina!";
		$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=iso-8859-1" ) );
		$MandaEmail=mail("aidemin@ruyguerra.com.br", $email_assunto, nl2br($email_conteudo), $email_headers);
	} else {
		$email_conteudo = "Nome: $nome<br />Email: $email<br /><br />$mensagem";
	}
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=iso-8859-1" ) );
	$MandaEmail=mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers);
	$email_destinatario = "ruy7@me.com";
	$MandaEmail=mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers);
	if ($MandaEmail == 1)	
	{
		echo "<p class=\"basico\">Prezado(a) $nome, obrigado por seu contato!</p>";
		
	}
	else 
	{
		echo "<p class=\"basico\">Houve um problema temporário no envio de emails.</p>";
	}
} else {

echo <<< EOT

<form id="personData" method="post" action="contato.php?quem=$quem&idioma=$idioma">
<p class="contato">
Nome:<br />
<input class="cheio" name="nome" size="50" /><br />
Email:<br />
<input class="cheio" name="email" size="50" /><br />
Mensagem:<br />
<textarea class="cheio" name="mensagem" rows="4"></textarea><br />
<input class="botao2" type="submit" value="Enviar" />
<span id="adiciona"></span>
</p>
</form>

EOT;
}

if ($idioma == 3) {
	include "rodape-eng.inc";
	echo "</section>";
	include "menu-eng.inc";
} elseif ($idioma == 2) {
	include "rodape-fr.inc";
	echo "</section>";
	include "menu-fr.inc";
}	else {
	include "rodape.inc";
	echo "</section>";
	include "menu.inc";
}
?>
</body>
	
