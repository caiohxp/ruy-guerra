<!DOCTYPE html>
<html lang="pt-br">
<head><meta http-equiv="Last-Modified" content="Sun, 07 Sep 2014 10:10:10 GMT">
<meta http-equiv="content-type" content="text/html;charset=windows-1252" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3" />
<meta name="robots" content="index,follow" />
<link href="geral.css" rel="stylesheet" type="text/css">
<link href="interna.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js_home39.js"></script>
<title>Ruy Guerra - globetrotter</title>
<body>

<section class="conteudo">
	<br />
	<img class="ruy" src="images/ruy_guerra.png" alt="Ruy Guerra" title="Ruy Guerra" /><img class="tituloCategoriaV" src="images/temposv.jpg" alt="tempos e espaços" title="tempos e espaços" />
	<br class="all" /><br /><br />
<p class="basico">
Por amor andei, já<br />
Tanto chão e mar<br />
Senhor, já nem sei<br />
Se o amor não é mais<br />
Bastante pra vencer<br />
Eu já sei o que vou fazer<br />
Senhor, uma oração<br />
Vou cantar para ver se vai valer<br />
Laia, ladaia, sabatana, Ave Maria<br />
Laia, ladaia, sabatana, Ave Maria...<br /><br />

<span class="italico">letra de REZA, por Edu Lobo e Ruy Guerra</span>
</p>
	
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
	
