window.onload = console.log("me carregou");
var botao = document.getElementById("botaoRastrear");
var campo = document.getElementById("cod");

function getRastreio(){

	console.log("RODOU !");
	desativarBotao();
	desativarCampo();

	var codigo = document.getElementById("cod").value;

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("conteudoRastreio").innerHTML = this.responseText;
		}
	};
	xhttp.open("POST", "rastreadorAjax.php" , true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("codigoRastreio="+codigo);


}

function test(){
	console.log("test");
}

function desativarBotao(){
	//botao.disabled = true;
	botao.value = "Rastrear outra encomenda";
	//botao.onclick = function 
	botao.onclick = function () { 
		document.location.reload(true);
	};

}

function desativarCampo(){
	cod.disabled = true;
}