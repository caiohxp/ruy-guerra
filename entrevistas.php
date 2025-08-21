<!DOCTYPE html>
<html lang="pt-br">
<head><meta http-equiv="Last-Modified" content="Sun, 07 Sep 2014 10:10:10 GMT">
<meta http-equiv="content-type" content="text/html;charset=windows-1252" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3" />
<meta name="robots" content="index,follow" />
<link href="geral.css" rel="stylesheet" type="text/css">
<link href="interna.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js_home39.js"></script>
<title>Ruy Guerra - entrevistas</title>
<body>

<?php
include 'conect.php';
$idioma = $_GET["idioma"];
if (empty($idioma)){$idioma = 1;}
$ordem = $_GET["ordem"];
if ($ordem == 1) {
	$sql = $mysqli->query("select id,titulo,autor,dia,mes,ano,local,cidade,pais,fonte,link,categoria from rg where categoria='entrevista' or categoria='entrevist2' order by titulo,ano desc,mes desc,dia desc");
} elseif ($ordem == 2) {
	$sql = $mysqli->query("select id,titulo,autor,dia,mes,ano,local,cidade,pais,fonte,link,categoria from rg where categoria='entrevista' or categoria='entrevist2' order by ano,mes,dia,titulo");
}	else {
	$sql = $mysqli->query("select id,titulo,autor,dia,mes,ano,local,cidade,pais,fonte,link,categoria from rg where categoria='entrevista' or categoria='entrevist2' order by ano desc,mes desc,dia desc,titulo");
}

echo <<< EOT

<section class="conteudo">
<br />
	<img class="ruy" src="images/ruy_guerra.png" alt="Ruy Guerra" title="Ruy Guerra" /><img class="tituloCategoriaV" src="images/entrevistasv.jpg" alt="entrevistas" title="entrevistas" />
	<br class="all" /><br /><br /><form method="post" action="busca.php?idioma=$idioma">
	<p class="ordem">Ordenar por: <a class="ordem" href="entrevistas.php?ordem=1&idioma=$idioma">título</a> &nbsp; <a class="ordem" href="entrevistas.php?ordem=2&idioma=$idioma">+antigo</a> &nbsp; <a class="ordem" href="entrevistas.php?ordem=3&idioma=$idioma">+recente</a></p>
	<p class="busca"><input class="campo" type="text" name="busca" /> <input class="botao" type="submit" value="Buscar" /><span class="branco">.</span></p></form>
	<br class="all" /><br />

EOT;

while ($f = $sql->fetch_array(MYSQLI_NUM)) {
	$data = '';
	if ($f[5] == 0000){$f[5]='';}
	if (!empty($f[5]) and $f[4]!='00' and $f[3]!='00') {
		$data = "($f[3]/$f[4]/$f[5])";
	} elseif (!empty($f[5]) and $f[4]!='00') {
		$data = "($f[4]/$f[5])";
	} elseif (!empty($f[5])) {
		$data = "($f[5])";
	} 
	if ($f[11] == 'entrevista') {
		echo "<p class=\"lista\"><a href=\"entrevista.php?id=$f[0]&idioma=$idioma\">$f[1]</a> $data";
	} else {
		echo "<p class=\"lista\"><span class=\"semTexto\">$f[1]</span> $data";
	}
	if (!empty($f[2])) {
		echo "<br /><span class=\"autor2\">$f[2]</span>";
	}
	if (!empty($f[9])) {
		echo "<br /><span class='lugar'>Fonte: $f[9]</span>";
	}
	if (!empty($f[10])) {
		echo "<br /><a href=\"http://$f[10]\"><span class='inverte'>$f[10]</span></a>";
	}
	if (!empty($f[6]) and !empty($f[7]) and !empty($f[8])) {
		echo "<br /><span class='lugar'>$f[6] - $f[7] - $f[8]</span>";
	} elseif (!empty($f[7]) and !empty($f[8])) {
		echo "<br /><span class='lugar'>$f[7] - $f[8]</span>";
	} elseif (!empty($f[8])) {
		echo "<br /><span class='lugar'>$f[8]</span>";
	}
	echo "</p>";
}

echo "<br /><p class=\"imagem\">
			<img class=\"img480\" src=\"images/cine_olho.jpg\" alt=\"cine-olho\" title=\"cine-olho\" />
			</p>";
			
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
	
