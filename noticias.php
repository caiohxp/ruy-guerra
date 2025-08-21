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
include 'conect.php';
function troca($string){$string  = str_replace("<br />"," ", $string);return $string;}
$sql = $mysqli->query("select * from noticia order by validade desc");

echo <<< EOT

<section class="conteudo">
	<br />
	<img class="ruy" src="images/ruy_guerra.png" alt="Ruy Guerra" title="Ruy Guerra" /><img class="tituloCategoriaV" src="images/noticiasv.jpg" alt="noticias" title="noticias" />
	<br class="all" /><br /><br />

EOT;

while ($f = $sql->fetch_array(MYSQLI_NUM)) {
	$titulo = troca($f[0]);
	$dt = explode('-',$f[1]);
	
	//echo "<h1 class=\"titulo\">$titulo <span class=\"naoTitulo\">($dt[2]-$dt[1]-$dt[0])</span></h1><p class=\"news\">";
	echo "<h1 class=\"titulo\">$titulo</h1><p class=\"news\">";
	echo "<br />$f[3]<br />";
	if (!empty($f[4])) {
		echo "<br /><span class=\"autor2\">Autor: $f[4]</span>";
	}
	if (!empty($f[5])) {
		echo "<br /><span class='lugar'>Fonte: $f[5]</span>";
	}
	if (!empty($f[6])) {
		echo "<br /><a href=\"$f[6]\">$f[6]</a>";
	}
	echo "</p><br /><br />";
}

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
	
