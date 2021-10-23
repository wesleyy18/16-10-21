var barraAltura, barraLargura, jogarposicaoX, velocidadejogador, bolaDiametro,
bolaposX, bolaposY, velocidadeBola, vidas, pontosJogador, colisao;

function inicializar() {
    barraAltura = 15;
    barraLargura = 90;
    velocidadejogador= 20;
    jogarposicaoX = (canvas.widht - barraLargura) / 2;
    bolaDiametro = 10 ; 
    bolaposX = canvas.widht / 2;
    bolaposY = 20;
    velocidadeBola = 5;
    
    pontosJogador = 0 ;
    vidas = 3;
    colisao = false;

    canvas = document.getElementById("canvas");
    context = canvas.getContext("2d");

    context.fillRect(jogarposicaoX, canvas.height - barraAltura, barraLargura, barraAltura);
    document.addEventListener('keydown', keydown);
    setInterval(gameloop, 30);

}

function keydown(e){
    console.log(e);

}

function gameloop() {
    context.clearReact(0, 0, canva.widht, canvas.height);
    context.fillRect(jogarposicaoX, canvas.height - barraAltura, barraLargura, barraAltura);

}

function Start(){
    window.location.reload();
}