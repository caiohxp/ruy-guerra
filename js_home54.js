function catchEvent(eventObj, event, eventHandler) {
	if (eventObj.addEventListener) {
		eventObj.addEventListener(event, eventHandler, false);
	} else if (eventObj.attachEvent){
		event = "on" + event;
		eventObj.attachEvent(event, eventHandler);
	}
}
function cancelEvent(event) {
	if (event.preventDefault) {
		event.preventDefault();
		event.stopPropagation();
	} else {
		event.returnValue = false;
		event.cancelBubble = true;
	}
}
catchEvent(window,"load", function() {
	var origem = document.URL;
	var pt = /index/;
	var fr = /frances/;
	var eng = /ingles/;
	if (eng.test(origem)) {
		legenda1 = '<p>Ruy and Gabriel García Márquez, Cuba, on the first half of the 80´s</p>';
		legenda2 = '<p>Ruy and Chico Buarque in Rio de Janeiro, early 70´s</p>';
		legenda3 = '<p>Ruy in Paris, 1954</p>';
		legenda4 = '<p>Framing the horizon, Atacama Desert (Chile, 2014)</p>';
		legenda5 = '<p>Ruy and Paulo Cesar Saraceni at a meeting of the New Cinema for French TV (RJ - 1966)</p>';
	} else if (fr.test(origem)) {
		legenda1 = '<p>Ruy et Gabriel García Márquez, Cuba, dans la premièe moitié des années 80</p>';
		legenda2 = '<p>Ruy et Chico Buarque à Rio, chez Chico,  moitié des annés 70</p>';
		legenda3 = '<p>Ruy à Paris, 1954</p>';
		legenda4 = '<p>Ruy  encadre l´horizon au désert de Atacama, Chili, janvier 2014</p>';
		legenda5 = '<p>Ruy et Paulo Cesar Saraceni dans une interview du groupe du Cinema Novo pour Les Cahiers Brésiliens de la  TV française, a Copacabana, Rio, 1966</p>';
	} else {
		legenda1 = '<p>Ruy com Gabriel García Márquez, Cuba, na 1ª metade dos anos 80</p>';
		legenda2 = '<p>Ruy com Chico Buarque no Rio de Janeiro, início dos anos 70</p>';
		legenda3 = '<p>Ruy estudante em Paris, 1954</p>';
		legenda4 = '<p>Enquadrando o horizonte, deserto do Atacama (Chile, 2014)</p>';
		legenda5 = '<p>Ruy e Paulo Cesar Saraceni em reunião do Cinema Novo para a TV francesa (RJ - 1966)</p>';
	}
	largura();
	//setupEvents(0);
});
function largura() {
	/*if (typeof window.innerWidth!= 'undefined')
	{largura = window.innerWidth;}
	else if (typeof document.documentElement!='undefined' && typeof document.documentElement.clientWidth!='undefined' && document.documentElement.clientWidth!= 0)
	{largura = document.documentElement.clientWidth;}
	else
	{largura = document.getElementsByTagName('body')[0].clientWidth;}
	alert(largura);*/
	setupEvents(0);
}

function aqui(k) {
	legenda = document.getElementById("legenda");
	if (k == 0)
	{
		c1.setAttribute("src","images/botao1bp.gif");
		c2.setAttribute("src","images/botao2ap.gif");
		c3.setAttribute("src","images/botao3ap.gif");
		c4.setAttribute("src","images/botao4ap.gif");
		c5.setAttribute("src","images/botao5ap.gif");
		//var txt1 = "ruy";
		//var txt2 = document.createTextNode(txt1);
		//legenda.appendChild(txt2);
		//legenda.setAttribute("html","<p>Ruy</p>");
		bol1.style.zIndex = 5;
		foto1.style.opacity="1";
		bol1.style.borderColor="#8b0000";
		bol2.style.zIndex = 4;
		foto2.style.opacity="0.6";
		bol2.style.borderColor="#222";
		bol3.style.zIndex = 3;
		foto3.style.opacity="0.5";
		bol3.style.borderColor="#222";
		bol4.style.zIndex = 2;
		foto4.style.opacity="0.4";
		bol4.style.borderColor="#222";
		bol5.style.zIndex = 1;
		foto5.style.opacity="0.3";
		bol5.style.borderColor="#222";
		legenda.innerHTML = legenda1;
	}
	else if (k == 1)
	{
		c1.setAttribute("src","images/botao1ap.gif");
		c2.setAttribute("src","images/botao2bp.gif");
		c3.setAttribute("src","images/botao3ap.gif");
		c4.setAttribute("src","images/botao4ap.gif");
		c5.setAttribute("src","images/botao5ap.gif");
		bol1.style.zIndex = 1;
		foto1.style.opacity="0.3";
		bol1.style.borderColor="#222";
		bol2.style.zIndex = 5;
		foto2.style.opacity="1";
		bol2.style.borderColor="#8b0000";
		bol3.style.zIndex = 4;
		foto3.style.opacity="0.6";
		bol3.style.borderColor="#222";
		bol4.style.zIndex = 3;
		foto4.style.opacity="0.5";
		bol4.style.borderColor="#222";
		bol5.style.zIndex = 2;
		foto5.style.opacity="0.4";
		bol5.style.borderColor="#222";
		legenda.innerHTML = legenda2;
	}
	if (k == 2)
	{
		c1.setAttribute("src","images/botao1ap.gif");
		c2.setAttribute("src","images/botao2ap.gif");
		c3.setAttribute("src","images/botao3bp.gif");
		c4.setAttribute("src","images/botao4ap.gif");
		c5.setAttribute("src","images/botao5ap.gif");
		bol1.style.zIndex = 2;
		foto1.style.opacity="0.4";
		bol1.style.borderColor="#222";
		bol2.style.zIndex = 1;
		foto2.style.opacity="0.3";
		bol2.style.borderColor="#222";
		bol3.style.zIndex = 5;
		foto3.style.opacity="1";
		bol3.style.borderColor="#8b0000";
		bol4.style.zIndex = 4;
		foto4.style.opacity="0.6";
		bol4.style.borderColor="#222";
		bol5.style.zIndex = 3;
		foto5.style.opacity="0.5";
		bol5.style.borderColor="#222";
		legenda.innerHTML = legenda3;
	}
	if (k == 3)
	{
		c1.setAttribute("src","images/botao1ap.gif");
		c2.setAttribute("src","images/botao2ap.gif");
		c3.setAttribute("src","images/botao3ap.gif");
		c4.setAttribute("src","images/botao4bp.gif");
		c5.setAttribute("src","images/botao5ap.gif");
		bol1.style.zIndex = 3;
		foto1.style.opacity="0.5";
		bol1.style.borderColor="#222";
		bol2.style.zIndex = 2;
		foto2.style.opacity="0.4";
		bol2.style.borderColor="#222";
		bol3.style.zIndex = 1;
		foto3.style.opacity="0.3";
		bol3.style.borderColor="#222";
		bol4.style.zIndex = 5;
		foto4.style.opacity="1";
		bol4.style.borderColor="#8b0000";
		bol5.style.zIndex = 4;
		foto5.style.opacity="0.6";
		bol5.style.borderColor="#222";
		legenda.innerHTML = legenda4;
	}
	if (k == 4)
	{
		c1.setAttribute("src","images/botao1ap.gif");
		c2.setAttribute("src","images/botao2ap.gif");
		c3.setAttribute("src","images/botao3ap.gif");
		c4.setAttribute("src","images/botao4ap.gif");
		c5.setAttribute("src","images/botao5bp.gif");
		bol1.style.zIndex = 4;
		foto1.style.opacity="0.6";
		bol1.style.borderColor="#222";
		bol2.style.zIndex = 3;
		foto2.style.opacity="0.5";
		bol2.style.borderColor="#222";
		bol3.style.zIndex = 2;
		foto3.style.opacity="0.4";
		bol3.style.borderColor="#222";
		bol4.style.zIndex = 1;
		foto4.style.opacity="0.3";
		bol4.style.borderColor="#222";
		bol5.style.zIndex = 5;
		foto5.style.opacity="1";
		bol5.style.borderColor="#8b0000";
		legenda.innerHTML = legenda5;
	}
}
function setupEvents(i) {
	bol1 = document.getElementById("img1");
	bol2 = document.getElementById("img2");
	bol3 = document.getElementById("img3");
	bol4 = document.getElementById("img4");
	bol5 = document.getElementById("img5");
	c1 = document.getElementById("click1");
	c2 = document.getElementById("click2");
	c3 = document.getElementById("click3");
	c4 = document.getElementById("click4");
	c5 = document.getElementById("click5");
	foto1 = document.getElementById("foto1");
	foto2 = document.getElementById("foto2");
	foto3 = document.getElementById("foto3");
	foto4 = document.getElementById("foto4");
	foto5 = document.getElementById("foto5");
	if (i < 5){
		j = i*1;
		var interval = setTimeout("trocaFoto(j)",1300);
	}
	catchEvent(document.getElementById("click1"),"click", function() {clearTimeout(interval);aqui(0);})
	catchEvent(document.getElementById("click2"),"click", function() {clearTimeout(interval);aqui(1);})
	catchEvent(document.getElementById("click3"),"click", function() {clearTimeout(interval);aqui(2);})
	catchEvent(document.getElementById("click4"),"click", function() {clearTimeout(interval);aqui(3);})
	catchEvent(document.getElementById("click5"),"click", function() {clearTimeout(interval);aqui(4);})
}
function trocaFoto(i) {
	if (i == 0)
	{
		c1.setAttribute("src","images/botao1bp.gif");
		c2.setAttribute("src","images/botao2ap.gif");
		c3.setAttribute("src","images/botao3ap.gif");
		c4.setAttribute("src","images/botao4ap.gif");
		c5.setAttribute("src","images/botao5ap.gif");
		bol1.style.zIndex = 5;
		foto1.style.opacity="1";
		bol1.style.borderColor="#8b0000";
		bol2.style.zIndex = 4;
		foto2.style.opacity="0.6";
		bol2.style.borderColor="#222";
		bol3.style.zIndex = 3;
		foto3.style.opacity="0.5";
		bol3.style.borderColor="#222";
		bol4.style.zIndex = 2;
		foto4.style.opacity="0.4";
		bol4.style.borderColor="#222";
		bol5.style.zIndex = 1;
		foto5.style.opacity="0.3";
		bol5.style.borderColor="#222";
		i++;
		return setupEvents(i);
	}
	else if (i == 1)
	{
		c1.setAttribute("src","images/botao1ap.gif");
		c2.setAttribute("src","images/botao2bp.gif");
		c3.setAttribute("src","images/botao3ap.gif");
		c4.setAttribute("src","images/botao4ap.gif");
		c5.setAttribute("src","images/botao5ap.gif");
		bol1.style.zIndex = 1;
		foto1.style.opacity="0.3";
		bol1.style.borderColor="#222";
		bol2.style.zIndex = 5;
		foto2.style.opacity="1";
		bol2.style.borderColor="#8b0000";
		bol3.style.zIndex = 4;
		foto3.style.opacity="0.6";
		bol3.style.borderColor="#222";
		bol4.style.zIndex = 3;
		foto4.style.opacity="0.5";
		bol4.style.borderColor="#222";
		bol5.style.zIndex = 2;
		foto5.style.opacity="0.4";
		bol5.style.borderColor="#222";
		i++;
		return setupEvents(i);
	}
	if (i == 2)
	{
		c1.setAttribute("src","images/botao1ap.gif");
		c2.setAttribute("src","images/botao2ap.gif");
		c3.setAttribute("src","images/botao3bp.gif");
		c4.setAttribute("src","images/botao4ap.gif");
		c5.setAttribute("src","images/botao5ap.gif");
		bol1.style.zIndex = 2;
		foto1.style.opacity="0.4";
		bol1.style.borderColor="#222";
		bol2.style.zIndex = 1;
		foto2.style.opacity="0.3";
		bol2.style.borderColor="#222";
		bol3.style.zIndex = 5;
		foto3.style.opacity="1";
		bol3.style.borderColor="#8b0000";
		bol4.style.zIndex = 4;
		foto4.style.opacity="0.6";
		bol4.style.borderColor="#222";
		bol5.style.zIndex = 3;
		foto5.style.opacity="0.5";
		bol5.style.borderColor="#222";
		i++;
		return setupEvents(i);
	}
	if (i == 3)
	{
		c1.setAttribute("src","images/botao1ap.gif");
		c2.setAttribute("src","images/botao2ap.gif");
		c3.setAttribute("src","images/botao3ap.gif");
		c4.setAttribute("src","images/botao4bp.gif");
		c5.setAttribute("src","images/botao5ap.gif");
		bol1.style.zIndex = 3;
		foto1.style.opacity="0.5";
		bol1.style.borderColor="#222";
		bol2.style.zIndex = 2;
		foto2.style.opacity="0.4";
		bol2.style.borderColor="#222";
		bol3.style.zIndex = 1;
		foto3.style.opacity="0.3";
		bol3.style.borderColor="#222";
		bol4.style.zIndex = 5;
		foto4.style.opacity="1";
		bol4.style.borderColor="#8b0000";
		bol5.style.zIndex = 4;
		foto5.style.opacity="0.6";
		bol5.style.borderColor="#222";
		i++;
		return setupEvents(i);
	}
	if (i == 4)
	{
		c1.setAttribute("src","images/botao1ap.gif");
		c2.setAttribute("src","images/botao2ap.gif");
		c3.setAttribute("src","images/botao3ap.gif");
		c4.setAttribute("src","images/botao4ap.gif");
		c5.setAttribute("src","images/botao5bp.gif");
		bol1.style.zIndex = 4;
		foto1.style.opacity="0.6";
		bol1.style.borderColor="#222";
		bol2.style.zIndex = 3;
		foto2.style.opacity="0.5";
		bol2.style.borderColor="#222";
		bol3.style.zIndex = 2;
		foto3.style.opacity="0.4";
		bol3.style.borderColor="#222";
		bol4.style.zIndex = 1;
		foto4.style.opacity="0.3";
		bol4.style.borderColor="#222";
		bol5.style.zIndex = 5;
		foto5.style.opacity="1";
		bol5.style.borderColor="#8b0000";
		i=0;
		return setupEvents(i);
	}
}