<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Last-Modified" content="Sun, 07 Sep 2014 10:10:10 GMT">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta http-equiv="content-type" content="text/html;charset=windows-1252" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3" />
<meta name="robots" content="index,follow" />
<link href="geral.css" rel="stylesheet" type="text/css">
<link href="home.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js_home54.js"></script>
<title>Ruy Guerra - home</title>
<body>


<section class="conteudo">
	
<article class="centraliza">
<div class="blocos" id="img1"><img class="foto" id="foto1" src="images/ruy-gabo.jpg" alt="Ruy et Gabriel Garc�a M�rquez, Cuba, dans la premi�e moiti� des ann�es 80" title="Ruy et Gabriel Garc�a M�rquez, Cuba, dans la premi�e moiti� des ann�es 80" /></div>
<div class="blocos" id="img2"><img class="foto" id="foto2" src="images/ruy_guerra-chico_buarque.jpg" alt="Ruy et Chico Buarque � Rio, chez Chico,  moiti� des ann�s 70" title="Ruy et Chico Buarque � Rio, chez Chico,  moiti� des ann�s 70" /></div>
<div class="blocos" id="img3"><img class="foto" id="foto3" src="images/deco2.jpg" alt="Ruy � Paris, 1954" title="Ruy � Paris, 1954" /></div>
<div class="blocos" id="img4"><img class="foto" id="foto4" src="images/deco1.jpg" alt="Ruy  encadre l�horizon au d�sert de Atacama, Chili, janvier 2014" title="Ruy  encadre l�horizon au d�sert de Atacama, Chili, janvier 2014" /></div>
<div class="blocos" id="img5"><img class="foto" id="foto5" src="images/cinema_novo.jpg" alt="Ruy et Paulo Cesar Saraceni dans une interview du groupe du Cinema Novo pour Les Cahiers Br�siliens de la  TV fran�aise, a Copacabana, Rio, 1966" title="Ruy et Paulo Cesar Saraceni dans une interview du groupe du Cinema Novo pour Les Cahiers Br�siliens de la  TV fran�aise, a Copacabana, Rio, 1966" /></div>
<div class="botoes">
	<img id="click1" src="images/botao1bp.gif" alt="1" title="1" />
	<img id="click2" src="images/botao2ap.gif" alt="2" title="2" />
	<img id="click3" src="images/botao3ap.gif" alt="3" title="3" />
	<img id="click4" src="images/botao4ap.gif" alt="4" title="4" />
	<img id="click5" src="images/botao5ap.gif" alt="5" title="5" />
</div>
<div id="legenda"></div>
</article>

<article class="nasceu">
		<h1 class="letreiro">RUY GUERRA</h1>
		<p class="ruyguerra">
			N� le <span class="vermelho">22/8/1931 au Mozambique,</span> colonie portugaise en Afrique. D�s son adolescence il a <span class="vermelho">une passion pour les mots et l�image.</span> Il a �crit des contes, des po�mes et des critiques cin�matographiques, publi�s dans la presse de Louren�o Marques, capitale du Mozambique. Il a �galement film� la vie quotidienne des travailleurs noirs du port de la ville, le Cais Gorj�o.<br /><br />
A vingt ans , il se rend � <span class="vermelho">Paris et devient cin�aste.</span> En juillet  1958, il arrive � Rio de Janeiro. <br /><br />
Ses deux premiers films- La plage du d�sir (1962) et Les Fuzils (1964, Ours d �argent � la Berlinale) - le rendent c�l�bre dans le monde du cin�ma br�silien et internationale. Il est le premier r�alisateur du groupe du Cin�ma Novo � filmer hors du Br�sil (France ,1968).<br /><br />
Dans les ann�es 1960/1970, � Rio, <span class="vermelho">il a �crit des paroles pour des jeunes musiciens,</span> entre autres Edu Lobo, Francis Hime, Milton Nascimento et Chico Buarque de Holanda. Avec Chico il �crit une �uvre musicale : Calabar : l��loge de la trahison: le spectacle fut censur� par la dictature militaire. Du m�me auteur (1985) il filme �galement l�Op�ra du Malandro (1985) et Estorvo, tir� de son roman (2000). Il est le directeur qui a r�alis� le plus de films tir�s des romans de Gabriel Garc�a M�rquez, son ami depuis 1972.<br /><br />
Ruy a voyag� dans plusieurs pays a cause de sa passion pour filmer. Dans la seconde moiti� des ann�es  1990, il se d�cida a vivre pour de bon a Rio, o� sont n�s ses 3 enfants et ses 3 petits enfants.
<br clear="all" /><br />
		</p>
		
<?php
include 'conect.php';
$sql = $mysqli->query("select count(*) from noticia where validade>now()");
$row = $sql->fetch_array(MYSQLI_NUM);
if ($row[0] > 0){
	//echo "<h2 class=\"noticia\"><a href=\"noticias.php\">NOT�CIAS</a></h2>";
	echo "<p><a class=\"noticia2\" href=\"noticias.php?idioma=2\">Actualit�s</a></p>";
}
?>
		</article>


</section>

<?php
include "menu-fr.inc";
?>
</body>
	
