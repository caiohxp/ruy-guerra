<!DOCTYPE html>
<html lang="pt-br">
<head><meta http-equiv="Last-Modified" content="Sun, 07 Sep 2014 10:10:10 GMT">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta http-equiv="content-type" content="text/html;charset=windows-1252" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3" />
<meta name="robots" content="index,follow" />
<link href="geral.css" rel="stylesheet" type="text/css">
<link href="home.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js_home54.js"></script>
<title>Ruy Guerra - site em inglês</title>
<body>


<section class="conteudo">
	
<article class="centraliza">
<div class="blocos" id="img1"><img class="foto" id="foto1" src="images/ruy-gabo.jpg" alt="Ruy and Gabriel García Márquez, Cuba, on the first half of the 80´s" title="Ruy and Gabriel García Márquez, Cuba, on the first half of the 80´s" /></div>
<div class="blocos" id="img2"><img class="foto" id="foto2" src="images/ruy_guerra-chico_buarque.jpg" alt="Ruy and Chico Buarque in Rio de Janeiro, early 70´s" title="Ruy and Chico Buarque in Rio de Janeiro, early 70´s" /></div>
<div class="blocos" id="img3"><img class="foto" id="foto3" src="images/deco2.jpg" alt="Ruy in Paris, 1954" title="Ruy in Paris, 1954" /></div>
<div class="blocos" id="img4"><img class="foto" id="foto4" src="images/deco1.jpg" alt="Framing the horizon, Atacama Desert (Chile, 2014)" title="Framing the horizon, Atacama Desert (Chile, 2014)" /></div>
<div class="blocos" id="img5"><img class="foto" id="foto5" src="images/cinema_novo.jpg" alt="Ruy and Paulo Cesar Saraceni at a meeting of the New Cinema for French TV (RJ - 1966)" title="Ruy and Paulo Cesar Saraceni at a meeting of the New Cinema for French TV (RJ - 1966)" /></div>
<div class="botoes">
	<img id="click1" src="images/botao1bp.gif" alt="1" title="1" />
	<img id="click2" src="images/botao2ap.gif" alt="2" title="2" />
	<img id="click3" src="images/botao3ap.gif" alt="3" title="3" />
	<img id="click4" src="images/botao4ap.gif" alt="4" title="4" />
	<img id="click5" src="images/botao5ap.gif" alt="5" title="5"  />
</div>
<div id="legenda"></div>
</article>

<article class="nasceu">
		<h1 class="letreiro">RUY GUERRA</h1>
		<p class="ruyguerra">
<span class="vermelho">Born in Mozambique, Portuguese African colony on 08/22/1931.</span> Since youth, he was <span class="vermelho">in love with words and images.</span> He wrote poetry, short stories, film criticism, many of them printed in Lourenço Marques´ media. He loved to go to the movies. He also filmed a documentary about the daily lives of longshoremen in that important port in Southern Africa.<br /><br />
When he was twenty, he went to <span class="vermelho">Paris where he graduated as a movie maker.</span> He landed in Rio de Janeiro in July 1958. His first two films – The Unscrupulous Ones (1962) and  The Guns (1964) - soon became known among Brazilian and international critics and film lovers. He was the first director of the Cinema Novo group shooting outside of Brazil (France, 1968).<br /><br />
In the 60’s and 70’ <span class="vermelho">he wrote lyrics for young musicians who became famous,</span> such as Edu Lobo, Francis Hime, Milton Nascimento, and Chico Buarque de Holanda. With Chico he wrote the musical play Calabar. Two of his films were also inspired on Chico´s works: Ópera do Malandro (1985), Chico´s musical play, and Estorvo (2000), Chico ´s book of the same name. He was the director who filmed more works of Gabriel García Márquez, his friend since 1972.<br /><br />
He travelled to many countries on account of his passion for filming. After 1995 he returned to live in Rio, where were born his 3 children and 3 grand-children.
<br clear="all" /><br />
		</p>
		
<?php
include 'conect.php';
$sql = $mysqli->query("select count(*) from noticia where validade>now()");
$row = $sql->fetch_array(MYSQLI_NUM);
if ($row[0] > 0){
	//echo "<h2 class=\"noticia\"><a href=\"noticias.php\">NOTÍCIAS</a></h2>";
	echo "<p><a class=\"noticia2\" href=\"noticias.php?idioma=3\">News</a></p>";
}
?>
		</article>


</section>

<?php
include "menu-eng.inc";
?>
</body>
	
