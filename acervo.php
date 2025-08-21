<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Last-Modified" content="Sun, 07 Sep 2014 10:10:10 GMT">
<meta http-equiv="content-type" content="text/html;charset=windows-1252" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3" />
<meta name="robots" content="index,follow" />
<link href="geral.css" rel="stylesheet" type="text/css">
<link href="interna.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js_home39.js"></script>
<title>Ruy Guerra - acervo</title>
<body>

<section class="conteudo">
	<br />
	<img class="ruy" src="images/ruy_guerra.png" alt="Ruy Guerra" title="Ruy Guerra" /><img class="tituloCategoriaV2" src="images/acervo.jpg" alt="acervo" title="acervo" />
	<br class="all" /><br /><br />
	
	<p class="basico">
	Uma parte da documentação pessoal acumulada por Ruy Guerra foi depositada, desde os anos 1989/1990, no <b>Museu de Arte Moderna do Rio de Janeiro (MAM)</b>  e uma segunda parte, desde o segundo semestre de 2021,  comprada pelo <b>Instituto Moreira Salles (IMS)</b> e depositada em seu arquivo do  Rio de Janeiro.</p>

<p class="basico">No <b>Arquivo Nacional</b> no Rio de Janeiro podem ser encontrados alguns de seus filmes:</p>

<p class="basico"><b>Sweet Hunters</b> -  uma cópia com legendas em francês;</p>

<p class="basico"><b>A queda</b> - uma cópia com legendas em espanhol, um negativo do som somente e um trailer;</p>

<p class="basico"><b>Mueda, Memória e Massacre</b> - uma cópia sem legendas.</p>

<p class="basico"><b>Erendira</b> - uma  cópia sem legendas  e uma cópia com legendas em francês ;.</p>

<p class="basico"><b>Ópera do Malandro</b> - uma cópia sem legendas;</p>

<p class="basico"><b>Bela Palomera</b> - uma cópia sem legendas;</p>

<p class="basico"><b>Kuarup</b>  - uma cópia sem legendas.</p>

<p class="basico">A <b>Cinemateca Brasileira em São Paulo</b> possui uma cópia restaurada de <b>Os Fuzis</b>, versão nacional autorizada pelo produtor Jarbas Barbosa que, por ter sofrido um corte de vários minutos, Ruy não assina.</p>

 
	
	
	
<?php
$idioma = $_GET["idioma"];
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
	
