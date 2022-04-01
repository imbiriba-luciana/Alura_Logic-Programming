<canvas width = "600" height = "400"></canvas>

<script>

function desenhaQuadradoVerde(x,y) {
// coloca um x para que a função que eu criei aceite novos valores de x, assim posso mudar a posição e fazer mais de um quadrado ao lado do outro.
var tela = document.querySelector("canvas");
var pincel = tela.getContext("2d");


pincel.fillStyle = "brown";
pincel.fillRect(x, y, 50, 50);


pincel.fillStroke = "black";
pincel.strokeRect(x, y, 50, 50);

}

desenhaQuadradoVerde(0,0);
desenhaQuadradoVerde(50,50);
desenhaQuadradoVerde(100,100);
desenhaQuadradoVerde(150,150);


</script>