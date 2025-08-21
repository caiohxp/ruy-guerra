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
	
<?php
include 'conect.php';
$id = $_GET["id"];
$sql = $mysqli->query("select titulo,autor,conteudo from rg where id=$id");
$row = $sql->fetch_array(MYSQLI_NUM);
$titulo = $row[0];
$autor = $row[1];
$conteudo = $row[2];

echo <<< EOT

<title>$titulo</title>
<body>
<section class="conteudo">
	<header class="sobretudo">
	<img class="ruy" src="images/ruy_guerra.png" alt="Ruy Guerra" title="Ruy Guerra" /><img class="tituloCategoria" src="images/contosv.jpg" alt="contos" title="contos" />
	<h1 class="tituloConteudo">$titulo<br />
		<span class="autor">$autor</span>
		</h1>
</header>
<br class="all" /><br /><br />
$conteudo

EOT;

$idioma = $_GET["idioma"];
if ($idioma == 3) {
	echo "<footer id=\"rodape\">
	<p>
	<a href=\"contos.php?idioma=3\">VOLTAR</a> | 
	<a href=\"#topo\">TOPO</a> | 
	<a href=\"ingles.php\">HOME</a>
	</p></footer>";
	echo "</section>";
	include "menu-eng.inc";
} elseif ($idioma == 2) {
	echo "<footer id=\"rodape\">
	<p>
	<a href=\"contos.php?idioma=2\">VOLTAR</a> | 
	<a href=\"#topo\">TOPO</a> | 
	<a href=\"frances.php\">HOME</a>
	</p></footer>";
	echo "</section>";
	include "menu-fr.inc";
}	else {
	echo "<footer id=\"rodape\">
	<p>
	<a href=\"contos.php\">VOLTAR</a> | 
	<a href=\"#topo\">TOPO</a> | 
	<a href=\"index.php\">HOME</a>
	</p></footer>";
	echo "</section>";
	include "menu.inc";
}
?>
</body>
	
