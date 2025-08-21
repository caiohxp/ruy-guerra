<!DOCTYPE html>
<html lang="pt-br">
<head><meta http-equiv="Last-Modified" content="Sun, 07 Sep 2014 10:10:10 GMT">
<meta http-equiv="content-type" content="text/html;charset=windows-1252" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3" />
<meta name="robots" content="index,follow" />
<link href="geral.css" rel="stylesheet" type="text/css">
<link href="interna.css" rel="stylesheet" type="text/css">
<link href="filmografia.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js_home39.js"></script>
<title>Ruy Guerra - oficinas</title>
<body>

<section class="conteudo">
	<br />
	<img class="ruy" src="images/ruy_guerra.png" alt="Ruy Guerra" title="Ruy Guerra" /><img class="tituloCategoriaV" src="images/oficinasv.jpg" alt="oficinas" title="oficinas" />
	<br class="all" /><br /><br />

<p class="imagem"><img class="img480" src="images/oficinas.jpg" alt="oficina de Ruy Guerra" title="oficina de Ruy Guerra" /></p>
<br />

<p class="oficinas">
	Ruy Guerra, ao longo de sua vida profissional, tem ministrado cursos, oficinas e palestras em várias partes do Brasil e no exterior. Para mais informações, use nosso <a href="contato.php">formulário de contato</a>.
</p>
<br />

<div class="curta">
	<div class="curtaDescricao">
		<h1 class="premiosFilme">Docência Cinematográfica</h1>
		<h1 class="premio">1964 - Museu de Arte Moderna do Rio de Janeiro (MAM)</h1>
		<ul>
			<li>Curso de Direçao cinematográfica (interrompido pelo golpe de Estado)</li>
		</ul>
		<h1 class="premio">1988 - Work Shop de Roteiro, com Gabriel García Márquez, “Escola dos Tres Mundos” em San Antonio de los Baños, Cuba.</h1>
		<ul>
			<li>Desde 1988 Pertence ao quadro de Professores de cinema da “Escola dos Tres Mundos” em San Antonio de los Baños, Cuba</li>
		</ul>
		<h1 class="premio">1996 - Work Shop de Roteiros “Sundance” (Brasil) </h1>
		<ul>
			<li>Assessor</li>
		</ul>
		<h1 class="premio">1997 - Oficinas de Linguagem Cinematográfica e Realização Cinematográfica</h1>
		<ul>
			<li>Brasília, Belém do Pará, Porto Alegre, Guaranhuns, Instituto Dragão do Mar (Fortaleza) Vitória, Goiás, entre outros</li>
		</ul>
		<h1 class="premio">1997 - Oficina de Roteiros de curtametragem , CCBB Rio de Janeiro</h1>
		<ul>
			<li>Assessor</li>
		</ul>
		<h1 class="premio">1998 a 2000 - Universidade Estácio de Sá</h1>
		<ul>
			<li>Fundador, Supervisor e Professor (Linguagem Cinematográfica) do Curso de Cinema </li>
		</ul>
		<h1 class="premio">2001 a 2008 - Universidade Gama Filho </h1>
		<ul>
			<li>Fundador, Diretor e Professor (Linguagem Cinematográfica) do Curso de Cinema </li>
		</ul>
		<h1 class="premio">2007 - São José do Rio Preto</h1>
		<ul>
			<li>Oficina cinematográfica</li>
		</ul>
		<h1 class="premio">2007 Mangaratiba</h1>
		<ul>
			<li>Oficina cinematográfica</li>
		</ul>
		<h1 class="premio">2008 - Teatro Poeira, Rio de Janeiro</h1>
		<ul>
			<li>Artista Residente</li>
			<li>Oficina : “Muito além do Cinema”</li>
		</ul>
		<h1 class="premio">2008 - ArtCênicas, Rio de Janeiro</h1>
		<ul>
			<li>Oficina : “Camera, ator, personagem”</li>
		</ul>
		<h1 class="premio">2008 - Cachoeira do Macacu</h1>
		<ul>
			<li>Oficina cinematográfica</li>
		</ul>
		<h1 class="premio">2008 - Paraty</h1>
		<ul>
			<li>Oficina cinematográfica</li>
		</ul>
		<h1 class="premio">2008/2009 - Coordenador do Centro de Estudos e Pesquisa do Instituto Darcy Ribeiro</h1>
		<ul>
			<li>“O Pensar e o Fazer” </li>
		</ul>
		<h1 class="premio">2009 - Campinas/Tainã</h1>
		<ul>
			<li>Oficina cinematográfica</li>
		</ul>
		<h1 class="premio">2010 - Brasília</h1>
		<ul>
			<li>Oficina cinematográfica</li>
		</ul>
		<h1 class="premio">Desde 2010: Professor residente de “Linguagem Fílmica”do do Centro de Estudos e Pesquisa do Instituto Darcy Ribeiro</h1>
		<h1 class="premio">2011  - Palestras: Universidade Lusófona, Lisboa, Portugal</h1>
	</div>
</div>
	
<p class="imagem">
	<img class="img800" src="images/mestres_do_cinema_brasileiro.png" alt="Mestres do cinema brasileiro - Ruy Guerra" title="Mestres do cinema brasileiro - Ruy Guerra" /><br />
	Oficina realizada em Minas Gerais, 2013
</p>



	
	
	
<?php
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
	
