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
<title>Ruy Guerra - procurar</title>
<body>

<?php
include 'conect.php';
$idioma = $_GET["idioma"];
$busca = $_POST["busca"];
$contagem = strlen($busca);

echo <<< EOT

<section class="conteudo">
<br />
	<img class="ruy" src="images/ruy_guerra.png" alt="Ruy Guerra" title="Ruy Guerra" /><img class="tituloCategoriaV" src="images/buscasv.jpg" alt="buscas" title="buscas" />
	<br class="all" /><br /><br /><form method="post" action="busca.php">
	<p class="busca"><input class="campo" type="text" name="busca" /> <input class="botao" type="submit" value="Buscar" /><span class="branco">.</span></p></form>
	<br /><br />

EOT;

if ($contagem > 3) {
	$sql = $mysqli->query("select id,titulo,categoria,dia,mes,ano from rg where titulo like '%$busca%' or conteudo like '%$busca%' or autor like '%$busca%' order by ano desc,mes desc,dia desc");
	$linhas = $sql->num_rows;
	if ($linhas == 0)	{
		echo "<p class=\"lista\">Nenhum resultado encontrado para essa busca ($busca).</p>";
	} else {
		while ($f = $sql->fetch_array(MYSQLI_NUM)) {
			$data = '';
			/*if (!empty($f[5]) and $f[4]!='00' and $f[3]!='00') {
				$data = "($f[3]/$f[4]/$f[5])";
			} elseif (!empty($f[5]) and $f[4]!='00') {
				$data = "($f[4]/$f[5])";
			} elseif (!empty($f[5])) {
				$data = "($f[5])";
			}*/
			if (!empty($f[5]) and $f[5]!='0000') {
				$data = "($f[5])";
			}
			if ($f[2] == 'letra'){$f[2] = 'musica';}
			echo "<p class=\"lista\"><a href=\"$f[2].php?id=$f[0]&idioma=$idioma\">$f[1]</a><br />
			<span class=\"autor2\">$data em $f[2]s</span></p>";
		}
	}
}
else {
	echo "<p class=\"lista\">A palavra usada na busca precisa ter pelo menos 4 caractéres.</p>";
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
	
