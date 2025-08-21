<!DOCTYPE html>
<html lang="pt-br">
<head><meta http-equiv="Last-Modified" content="Sun, 07 Sep 2014 10:10:10 GMT">
<meta http-equiv="content-type" content="text/html;charset=windows-1252" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3" />
<meta name="robots" content="index,follow" />
<link href="geral.css" rel="stylesheet" type="text/css">
<link href="interna.css" rel="stylesheet" type="text/css">
<link href="fotos.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.0.3.min.js"></script>
<script>
$(document).ready(function() {
	$(document).on("click", ".foraDeFoco", function() {
		var aguarde = '<img src="images/carregando.gif" alt="aguarde" />';
		var navega = $(this).attr("id");
		var navega2 = navega.split('_');
		var palco = navega2[0];
		$("#"+palco).html(aguarde);
		var palco2 = palco.split('-');
		var album = palco2[1];
		var foto = navega2[1];
		var idNavega = 'navega-'+palco;
		$("#"+idNavega+" span").attr("class","foraDeFoco");
		$("#"+navega).attr("class","emFoco");
		$.post("troca_foto.php",
			{
				album:album,
				foto:foto
			},
			function(responseTxt,statusTxt,xhr){
				$("#"+palco).html(responseTxt);
		    if(statusTxt=="error")
		    alert("Error: "+xhr.status+": "+xhr.statusText);
		});
	});
});
</script>
<title>Ruy Guerra - viajante</title>
<body>

<section class="conteudo">
	<br />
	<img class="ruy" src="images/ruy_guerra.png" alt="Ruy Guerra" title="Ruy Guerra" /><img class="tituloCategoriaV" src="images/temposv.jpg" alt="pelo mundo" title="pelo mundo" />
	<br class="all" /><br /><br />

<?php
include 'conect.php';
$sql = $mysqli->query("select codigo,titulo,descricao,idPalco from album where pagina=1 order by ordem");
while ($f = $sql->fetch_array(MYSQLI_NUM)) {
	
	$sql2 = $mysqli->query("select arquivo,legenda from foto where album=$f[0] order by ordem");
	$row = $sql2->fetch_array(MYSQLI_NUM);
	$foto = $row[0];
	$legendaFoto = $row[1];
	$linhas = $sql2->num_rows;
	
echo <<< EOT

	<article class="fotos">
		<h1>$f[1]</h1>
		<div class="palco" id="$f[3]">
			<img class="foto" src="images/mundo/$foto" alt="$legendaFoto" />
			<p class="legendaFoto">$legendaFoto</p>
		</div>
		<div id="navega-$f[3]">
		<span class="emFoco" id="$f[3]_1">1</span>
EOT;

	for ($i = 2 ; $i <= $linhas ; $i++)
	{
		echo "<span class=\"foraDeFoco\" id=\"$f[3]_$i\">$i</span>";
	}
	echo "</div></article><br />";
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
	
