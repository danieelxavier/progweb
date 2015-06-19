
var game = document.getElementById("game");
var c=1;
var vez= "jog1";

var parray = new Array();

var tamH = 8;
var tamV = 8;
var numQuadrados = tamH * tamV;

var pontosjg1 = 0;
var pontosjg2 = 0;
var quadradosFeitos = 0;

document.getElementById("vez").style.color = "#40FF40";

// CRIANDO A TABELA ----------------------------------------------------------------------------------------------------
function line1() {
	newline = game.appendChild(document.createElement("tr"));
	newline.setAttribute("class", "line");
	newline.setAttribute("id", c);
	c++;

	for(y=1; y<=tamH; y++){
		point = newline.appendChild(document.createElement("td"));
		point.setAttribute("class", "point");

		image = point.appendChild(document.createElement("img"));
		image.setAttribute("src", "squares/d.gif");
		image.setAttribute("class", "point");
	//-----------------------------------------------------------------------
		h = newline.appendChild(document.createElement("td"));
		h.setAttribute("class", "horizontalLine");

		image = h.appendChild(document.createElement("img"));
		image.setAttribute("class", "horizontal");
		image.setAttribute("src", "squares/h.gif");
		image.setAttribute("onmouseover", "changeOverH(this)");
		image.setAttribute("onmouseout", "changeOutH(this)");
		image.setAttribute("id", c-1 + "-" + y);
		image.setAttribute("click", "0");
		image.setAttribute("onclick", "changeH(this);");

	}

	point = newline.appendChild(document.createElement("td"));
	point.setAttribute("class", "point");

	image = point.appendChild(document.createElement("img"));
	image.setAttribute("src", "squares/d.gif");
	image.setAttribute("class", "point");

	
}

function line2() {
	newline = game.appendChild(document.createElement("tr"));
	newline.setAttribute("class", "line");
	newline.setAttribute("id", c);
	c++;

	for(y=1; y<=tamH; y++){
		v = newline.appendChild(document.createElement("td"));
		v.setAttribute("class", "verticalLine");

		image = v.appendChild(document.createElement("img"));
		image.setAttribute("class", "vertical");
		image.setAttribute("src", "squares/v.gif");
		image.setAttribute("onmouseover", "changeOverV(this)");
		image.setAttribute("onmouseout", "changeOutV(this)");
		image.setAttribute("id", c-1 + "-" + y);
		image.setAttribute("click", "0");
		image.setAttribute("onclick", "changeV(this);");
	//-----------------------------------------------------------------------
		p = newline.appendChild(document.createElement("td"));
		p.setAttribute("class", "quadrado");

		image = p.appendChild(document.createElement("img"));
		image.setAttribute("src", "squares/p0.gif");
		image.setAttribute("id", c-1 + "-p-" + y);

		var quadrado = {click: 0, p: c-1 + "-p-" + y, up: c-2 + "-" + y, bot: c + "-" + y, rig: c-1 + "-" + (y+1), lef: c-1 + "-" + y};
		parray.push(quadrado);

	}

	v = newline.appendChild(document.createElement("td"));
	v.setAttribute("class", "verticalLine");

	image = v.appendChild(document.createElement("img"));
	image.setAttribute("class", "vertical");
	image.setAttribute("src", "squares/v.gif");
	image.setAttribute("onmouseover", "changeOverV(this)");
	image.setAttribute("onmouseout", "changeOutV(this)");
	image.setAttribute("id", c-1 + "-" + y);
	image.setAttribute("click", "0");
	image.setAttribute("onclick", "changeV(this);");
	
}


for (var i = 0; i < tamV; i++) {
	line1();
	line2();
}
line1();

/*
for (var i = 0; i < parray.length; i++) {
	console.log(parray[i]);
};
*/

//------------------------------------------------------------------------------------------------------------------------

// MUDAR COR DOS PALITOS--------------------------------------------------------------------------------------------------

function changeOverV(elem){
	click = elem.getAttribute("click");
	if(click == "0"){
		elem.setAttribute("src", "squares/v0.gif");
	}
}

function changeOutV(elem){
	click = elem.getAttribute("click");
	if(click == "0"){
		elem.setAttribute("src", "squares/v.gif");
	}
}

function changeOverH(elem){
	click = elem.getAttribute("click");
	if(click == "0"){
		elem.setAttribute("src", "squares/h0.gif");
	}
}

function changeOutH(elem){
	click = elem.getAttribute("click");
	if(click == "0"){
		elem.setAttribute("src", "squares/h.gif");
	}
}


function changeH(elem) {

	click = elem.getAttribute("click");
	if(click == "0"){
		elem.setAttribute("src","squares/h1.gif");
		elem.setAttribute("click","1");

		verifyP();

	}
}

function changeV(elem) {

	click = elem.getAttribute("click");
	if(click == "0"){
		elem.setAttribute("src","squares/v1.gif");
		elem.setAttribute("click","1");

		verifyP();
	}
}



function verifyP() {

	var pontuou = 0;

	for (var i = 0; i < parray.length; i++) {
		
		p = document.getElementById(parray[i].p);
		cli = parray[i].click;
		up = document.getElementById(parray[i].up).getAttribute("click");
		bot = document.getElementById(parray[i].bot).getAttribute("click");
		lef = document.getElementById(parray[i].lef).getAttribute("click");
		rig = document.getElementById(parray[i].rig).getAttribute("click");
		
		if(up == "1" && bot == "1" && lef == "1" && rig == "1" && cli == 0){
			if(vez == "jog1"){
				p.setAttribute("src", "squares/p1.gif");
				parray[i].click = 1;
				pontosjg1++;
				document.getElementById("jog1").innerHTML = pontosjg1;
				quadradosFeitos++;
				pontuou = 1;
			}
			else{
				p.setAttribute("src", "squares/p2.gif");
				parray[i].click = 1;
				pontosjg2++;
				document.getElementById("jog2").innerHTML = pontosjg2;
				quadradosFeitos++;
				pontuou = 1;
			}

			ganhador();
		}

	};

	jogador = document.getElementById("vez");

	if(pontuou == 0){
		if(vez == "jog1"){	
			vez = "jog2";
			jogador.innerHTML = "jogador 2";
			jogador.style.color = "#FFFF00";

		}
		else{
			vez = "jog1";
			jogador.innerHTML = "jogador 1";
			jogador.style.color = "#40FF40";
		}
	}

}

function ganhador(){
	if(numQuadrados == quadradosFeitos){
		var info = document.getElementById("tdgame");
		info.style.width = "560px";
		info.style.height = "560px";
		info.style.background = "#fff";

		if(pontosjg1 > pontosjg2){
			info.innerHTML = "JOGADOR 1 VENCEU !!";
			
			info.style.color = "#40FF40";
		}
		else if(pontosjg2 > pontosjg1){
			info.innerHTML = "JOGADOR 2 VENCEU !!";
			info.style.color = "#FFFF00";
		}
		else{
			info.innerHTML = "O JOGO EMPATOU";
			info.style.color = "#000";
		}

	}
}
//-----------------------------------------------------------------------------------------------------------------------
