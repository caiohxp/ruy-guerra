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
<title>Ruy Guerra - contos</title>
<body>


<?php
include 'conect.php';
function troca($string){$string  = str_replace("<br />"," ", $string);return $string;}
$idioma = $_GET["idioma"];
if (empty($idioma)){$idioma = 1;}
$ordem = $_GET["ordem"];
if ($ordem == 1) {
	$sql = $mysqli->query("select id,titulo,autor,dia,mes,ano,local,cidade,pais,fonte,tipo,anoFinal from rg where categoria='conto' order by titulo,ano desc,mes desc,dia desc");
} elseif ($ordem == 2) {
	$sql = $mysqli->query("select id,titulo,autor,dia,mes,ano,local,cidade,pais,fonte,tipo,anoFinal from rg where categoria='conto' order by ano,mes,dia,titulo");
}	else {
	$sql = $mysqli->query("select id,titulo,autor,dia,mes,ano,local,cidade,pais,fonte,anoFinal from rg where categoria='conto' order by ano desc,mes desc,dia desc");
}

echo <<< EOT

<section class="conteudo">
	<br />
	<img class="ruy" src="images/ruy_guerra.png" alt="Ruy Guerra" title="Ruy Guerra" /><img class="tituloCategoriaV" src="images/contosv.jpg" alt="contos" title="contos" />
	<br class="all" /><br /><br /><form method="post" action="busca.php?idioma=$idioma">
	<p class="ordem">Ordenar por: <a class="ordem" href="contos.php?ordem=1&idioma=$idioma">título</a> &nbsp; <a class="ordem" href="contos.php?ordem=2&idioma=$idioma">+antigo</a> &nbsp; <a class="ordem" href="contos.php?ordem=3&idioma=$idioma">+recente</a></p>
	<p class="busca"><input class="campo" type="text" name="busca" /> <input class="botao" type="submit" value="Buscar" /><span class="branco">.</span></p></form>
	<br class="all" /><br />

EOT;

while ($f = $sql->fetch_array(MYSQLI_NUM)) {
	$data = '(data indefinida)';
	if (!empty($f[5]) and $f[4]!='00' and $f[3]!='00') {
		$data = "($f[3]/$f[4]/$f[5])";
	} elseif (!empty($f[5]) and $f[4]!='00') {
		$data = "($f[4]/$f[5])";
	} elseif (!empty($f[5])) {
		if (!empty($f[10])) {
			$data = "(entre $f[5]/$f[10])";
		} else {
			$data = "($f[5])";
		}
	}
	$titulo = troca($f[1]);
	echo "<p class=\"lista\"><a href=\"conto.php?id=$f[0]&idioma=$idioma\">$titulo</a> $data<br />";
	echo "<span class=\"autor2\">$f[2]</span>";
	if (!empty($f[9])) {
		echo "<br /><span class='lugar'>Fonte: $f[9]</span>";
	}
	if (!empty($f[6]) and !empty($f[7]) and !empty($f[8])) {
		echo "<br /><span class='lugar'>$f[6] - $f[7] - $f[8]</span>";
	} elseif (!empty($f[7]) and !empty($f[8])) {
		echo "<br /><span class='lugar'>$f[7] - $f[8]</span>";
	} elseif (!empty($f[8])) {
		echo "<br /><span class='lugar'>$f[8]</span>";
	} else {
		echo "<br />Local: indefinido";
	}
	echo "</p>";
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
	
