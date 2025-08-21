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
<div class="blocos" id="img1"><img class="foto" id="foto1" src="images/ruy-gabo.jpg" alt="Ruy et Gabriel García Márquez, Cuba, dans la premièe moitié des années 80" title="Ruy et Gabriel García Márquez, Cuba, dans la premièe moitié des années 80" /></div>
<div class="blocos" id="img2"><img class="foto" id="foto2" src="images/ruy_guerra-chico_buarque.jpg" alt="Ruy et Chico Buarque à Rio, chez Chico,  moitié des annés 70" title="Ruy et Chico Buarque à Rio, chez Chico,  moitié des annés 70" /></div>
<div class="blocos" id="img3"><img class="foto" id="foto3" src="images/deco2.jpg" alt="Ruy à Paris, 1954" title="Ruy à Paris, 1954" /></div>
<div class="blocos" id="img4"><img class="foto" id="foto4" src="images/deco1.jpg" alt="Ruy  encadre l´horizon au désert de Atacama, Chili, janvier 2014" title="Ruy  encadre l´horizon au désert de Atacama, Chili, janvier 2014" /></div>
<div class="blocos" id="img5"><img class="foto" id="foto5" src="images/cinema_novo.jpg" alt="Ruy et Paulo Cesar Saraceni dans une interview du groupe du Cinema Novo pour Les Cahiers Brésiliens de la  TV française, a Copacabana, Rio, 1966" title="Ruy et Paulo Cesar Saraceni dans une interview du groupe du Cinema Novo pour Les Cahiers Brésiliens de la  TV française, a Copacabana, Rio, 1966" /></div>
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
			Né le <span class="vermelho">22/8/1931 au Mozambique,</span> colonie portugaise en Afrique. Dès son adolescence il a <span class="vermelho">une passion pour les mots et l’image.</span> Il a écrit des contes, des poèmes et des critiques cinématographiques, publiés dans la presse de Lourenço Marques, capitale du Mozambique. Il a également filmé la vie quotidienne des travailleurs noirs du port de la ville, le Cais Gorjão.<br /><br />
A vingt ans , il se rend à <span class="vermelho">Paris et devient cinéaste.</span> En juillet  1958, il arrive à Rio de Janeiro. <br /><br />
Ses deux premiers films- La plage du désir (1962) et Les Fuzils (1964, Ours d ´argent à la Berlinale) - le rendent célèbre dans le monde du cinéma brésilien et internationale. Il est le premier réalisateur du groupe du Cinéma Novo à filmer hors du Brésil (France ,1968).<br /><br />
Dans les années 1960/1970, à Rio, <span class="vermelho">il a écrit des paroles pour des jeunes musiciens,</span> entre autres Edu Lobo, Francis Hime, Milton Nascimento et Chico Buarque de Holanda. Avec Chico il écrit une œuvre musicale : Calabar : l’éloge de la trahison: le spectacle fut censuré par la dictature militaire. Du même auteur (1985) il filme également l’Opéra du Malandro (1985) et Estorvo, tiré de son roman (2000). Il est le directeur qui a réalisé le plus de films tirés des romans de Gabriel García Márquez, son ami depuis 1972.<br /><br />
Ruy a voyagé dans plusieurs pays a cause de sa passion pour filmer. Dans la seconde moitié des années  1990, il se décida a vivre pour de bon a Rio, où sont nés ses 3 enfants et ses 3 petits enfants.
<br clear="all" /><br />
		</p>
		
<?php
include 'conect.php';
$sql = $mysqli->query("select count(*) from noticia where validade>now()");
$row = $sql->fetch_array(MYSQLI_NUM);
if ($row[0] > 0){
	//echo "<h2 class=\"noticia\"><a href=\"noticias.php\">NOTÍCIAS</a></h2>";
	echo "<p><a class=\"noticia2\" href=\"noticias.php?idioma=2\">Actualités</a></p>";
}
?>
		</article>


</section>

<?php
include "menu-fr.inc";
?>
</body>
	
