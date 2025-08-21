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
<title>Ruy Guerra - site oficial</title>
<body>


<section class="conteudo">
	
<article class="centraliza">
<div class="blocos" id="img1"><img class="foto" id="foto1" src="images/ruy-gabo.jpg" alt="Ruy com Gabriel Garc�a M�rquez, Cuba, na 1� metade dos anos 80" title="Ruy com Gabriel Garc�a M�rquez, Cuba, na 1� metade dos anos 80" /></div>
<div class="blocos" id="img2"><img class="foto" id="foto2" src="images/ruy_guerra-chico_buarque.jpg" title="Ruy com Chico Buarque no Rio de Janeiro, in�cio dos anos 70" alt="Ruy com Chico Buarque no Rio de Janeiro, in�cio dos anos 70" /></div>
<div class="blocos" id="img3"><img class="foto" id="foto3" src="images/deco2.jpg" alt="Ruy estudante em Paris, 1954" title="Ruy estudante em Paris, 1954" /></div>
<div class="blocos" id="img4"><img class="foto" id="foto4" src="images/deco1.jpg" alt="Enquadrando o horizonte, deserto do Atacama (Chile, 2014)" title="Enquadrando o horizonte, deserto do Atacama (Chile, 2014)" /></div>
<div class="blocos" id="img5"><img class="foto" id="foto5" src="images/cinema_novo.jpg" alt="Ruy e Paulo Cesar Saraceni em reuni�o do Cinema Novo para a TV francesa (RJ - 1966)" title="Ruy e Paulo Cesar Saraceni em reuni�o do Cinema Novo para a TV francesa (RJ - 1966)" /></div>
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
		Ruy Guerra nasceu a <span class="vermelho">22/08/1931 em Mo�ambique,</span> col�nia africana portuguesa �s margens do Oceano �ndico. Desde jovem foi um <span class="vermelho">apaixonado pela palavra e pela imagem.</span> Escreveu poesias, contos, criticas cinematogr�ficas para a imprensa da capital Louren�o Marques; ass�duo frequentador das matin�s de cinema, filmou document�rio sobre o cotidiano dos trabalhadores das docas desse porto importante da �frica Austral.
		<br /><br />Aos vinte anos foi para <span class="vermelho">Paris onde se formou cineasta.</span> Desembarcou no Rio de Janeiro em  julho de 1958; fez do <span class="vermelho">Brasil seu pa�s de ado��o.</span> Seus dois primeiros filmes � Os Cafajestes (1962) e Os Fuzis (1964, Urso de Prata de Berlim) � logo o tornaram conhecido no cen�rio cinematogr�fico brasileiro e mundial. Foi o primeiro cineasta do grupo do Cinema Novo a filmar fora do Brasil (Fran�a, em 1968).
		<br /><br />No Rio de Janeiro dos anos 1960/1970 foi <span class="vermelho">parceiro letrista de m�sicos jovens</span> que se projetavam, entre outros Edu Lobo, Francis Hime, Milton Nascimento, Chico Buarque.  Com o �ltimo escreveu e realizou o musical Calabar: o elogio da trai��o, proibido pela censura da ditadura militar  em 1973. Ainda de Chico filmou o musical A �pera do Malandro em 1985 e em 2000  o livro Estorvo. Foi o realizador que mais levou � tela trabalhos de Gabriel Garc�a M�rquez, de quem ficou amigo desde 1972.
		<br /><br />Andou meio mundo atr�s de sua paix�o por filmar; em meados de 1990 voltou a se fixar no Rio de Janeiro, onde nasceram e vivem seus 3 filhos e 3 netos. <br />
		<br class="all" /><br />
	</p>
		
<?php
include 'conect.php';
$sql = $mysqli->query("select count(*) from noticia where validade>now()");
$row = $sql->fetch_array(MYSQLI_NUM);
if ($row[0] > 0){
	//echo "<h2 class=\"noticia\"><a href=\"noticias.php\">NOT�CIAS</a></h2>";
	echo "<p><a class=\"noticia2\" href=\"noticias.php\">NOT�CIAS</a></p>";
}
?>
</article>

<div id="maisMenu"><a href="menu.html">MENU</a></div>

</section>

<?php
include "menu.inc";
?>
</body>
	
