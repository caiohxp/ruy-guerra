<!DOCTYPE html>
<html lang="pt-br">
<head><meta http-equiv="Last-Modified" content="Sun, 07 Sep 2014 10:10:10 GMT">
<meta http-equiv="content-type" content="text/html;charset=windows-1252" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3" />
<meta name="robots" content="index,follow" />
<link href="geral.css" rel="stylesheet" type="text/css">
<link href="interna.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js_home39.js"></script>
<title>Ruy Guerra - notícias</title>
<body>


<?php
$idioma = $_GET["idioma"];

echo <<< EOT

<section class="conteudo">
	<br />
	<img class="ruy" src="images/ruy_guerra.png" alt="Ruy Guerra" title="Ruy Guerra" /><img class="tituloCategoriaV" src="images/ositev.jpg" alt="sobre o site" title="sobre o site" />
	<br class="all" /><br /><br />
	<h3 class="coisa">Pesquisa e Organização</h3>
	<p class="coisa"><a href="contato.php?quem=vavy&idioma=$idioma">Vavy Pacheco Borges</a></p>
	<br /><br />
	<h3 class="coisa">Fotos</h3>
	<p class="coisa">Acervo Ruy Guerra<br />
Fotos gentilmente cedidas ao Acervo Vavy Pacheco Borges
</p>
	<br /><br />
	<h3 class="coisa">Webdesign e Programação</h3>
	<p class="coisa"><a href="contato.php?quem=marina&idioma=$idioma">Marina Milos</a></p>

EOT;


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
	
