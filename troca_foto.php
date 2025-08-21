<?php
header('Content-Type: text/html; charset=ISO-8859-1');
	include 'conect.php';
	$album = $_POST['album'];
	$foto = $_POST['foto'];
	$sql = $mysqli->query("select arquivo,legenda from foto where album='$album' and ordem='$foto' limit 1");
	$sql2 = mysqli_fetch_row($sql);
	$arquivo = $sql2[0];
	$legenda = $sql2[1];
	echo "<img class=\"foto\" src=\"images/mundo/$arquivo\" alt=\"$legenda\" /><p class=\"legendaFoto\">$legenda</p>";
?>