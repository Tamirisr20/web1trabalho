let btnEsquerdo = document.getElementById("btn__esquedo");

let cabelo = "./assets/imagens/cabelo/1.png";
let emoções = "./assets/imagens/emoções/1.png";
let cor = "./assets/imagens/cor/1.png";
let partecima = "./assets/imagens/partecima/1.png";
let partebaixa = "./assets/imagens/partebaixa/1.png";

function crescendoCabelo(element, imgCabelo) {
    const num = 7;
    let path;
    let peca = parseInt(element.value, 10);
    if (peca < num) {
        peca += 1;
    } else {
        element.value = 1;
        peca = 1;
    }
    path = `./assets/images/cabelo/${peca}.png`;
    imgCabelo.src = path;
    element.value = peca;
    cabelo = path;
}

function cortandoCabelo(element, imgCabelo) {
    const num = 7;
    let path;
    let peca = parseInt(element.value, 10);
    if (peca > 1) {
        peca -= 1;
    } else {
        element.value = num;
        peca = num;
    }
    path = `./assets/images/cabelo/${peca}.png`;
    imgCabelo.src = path;
    element.value = peca;
    cabelo = path;
}

function aumentandoemocoes(element, _imgemocoes) {
    const num = 18;
    let path;
    let peca = parseInt(element.value, 10);
    if (peca < num) {
        peca += 1;
    } else {
        element.value = 1;
        peca = 1;
    }
    path = `./assets/images/emoções/${peca}.png`;
    _imgemocoes.src = path;
    element.value = peca;
    emoções = path;
}

function diminuindoemocoes(element, _imgemocoes) {
    const num = 18;
    let path;
    let peca = parseInt(element.value, 10);
    if (peca > 1) {
        peca -= 1;
    } else {
        element.value = num;
        peca = num;
    }
    path = `./assets/images/emoções/${peca}.png`;
    _imgemocoes.src = path;
    element.value = peca;
    emoções = path;
}

function mudandoCor(element, _imgcor) {
    const num = 10;
    let path;
    let peca = parseInt(element.value, 10);
    if (peca < num) {
        peca += 1;
    } else {
        element.value = 1;
        peca = 1;
    }
    path = `./assets/images/cor/${peca}.png`;
    _imgcor.src = path;
    element.value = peca;
    cor = path;
}

function diminuindoCor(element, _imgcor) {
    const num = 10;
    let path;
    let peca = parseInt(element.value, 10);
    if (peca > 1) {
        peca -= 1;
    } else {
        element.value = num;
        peca = num;
    }
    path = `./assets/images/cor/${peca}.png`;
    _imgcor.src = path;
    element.value = peca;
    cor = path;
}

function aumentarpartecima(element, _imgPartecima) {
    const num = 21;
    let path;
    let peca = parseInt(element.value, 10);
    if (peca < num) {
        peca += 1;
    } else {
        element.value = 1;
        peca = 1;
    }
    path = `./assets/images/partecima/${peca}.png`;
    _imgPartecima.src = path;
    element.value = peca;
    partecima = path;
}

function diminuirpartecima(element, _imgPartecima) {
    const num = 21;
    let path;
    let peca = parseInt(element.value, 10);
    if (peca > 1) {
        peca -= 1;
    } else {
        element.value = num;
        peca = num;
    }
    path = `./assets/images/partecima/${peca}.png`;
    _imgPartecima.src = path;
    element.value = peca;
    partecima = path;
}

function aumentarpartebaixa(element, _imgpartebaixa) {
    const num = 10;
    let path;
    let peca = parseInt(element.value, 10);
    if (peca < num) {
        peca += 1;
    } else {
        element.value = 1;
        peca = 1;
    }
    path = `./assets/images/partebaixa/${peca}.png`;
    _imgpartebaixa.src = path;
    element.value = peca;
    partebaixa = path;
}

function diminuirpartebaixa(element, _imgpartebaixa) {
    const num = 10;
    let path;
    let peca = parseInt(element.value, 10);
    if (peca > 1) {
        peca -= 1;
    } else {
        element.value = num;
        peca = num;
    }
    path = `./assets/images/partebaixa/${peca}.png`;
    _imgpartebaixa.src = path;
    element.value = peca;
    partebaixa = path;
}

function mostraPaths() {
    console.log(cabelo);
    console.log(emocões);
    console.log(cor);
    console.log(partecima);
    console.log(partebaixa);
}
