<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/cadastroPaciente.css">
    <title>Cadastro de Paciente</title>
</head>
<body>
    <header class="header">
        <img class="header__image" src="./assets/images/header.png" alt="Cabeçalho">
    </header>
    <main class="principal">
        <a href="" class="princial__volta">Voltar</a>
        <h1 class="principal__title">Cadastro Paciente</h1>
        <form action="" class="principal__formulario">
            <h2 class="formulario__titulo">Responsável</h2>
            <div class="form__box">
                Nome: <input type="text" class="form__input">
                Email: <input type="text" class="form__input">
                Telefone: <input type="text" class="form__input">
            </div>

            <h2 class="formulario__titulo">Criança</h2>
            <div class="form__box">
                Nome: <input type="text" class="form__input">
                Data Nascimento: <input type="text" class="form__input">
            </div>
            <br>
            <h2 class="formulario__titulo">Avatar</h2>
            <section class="form__avatar">
                <div class="form__avatar--corpo">
                    <img src="./assets/images/cabelo/1.png" alt="Cabelo" class="cabelo" id="cabelo_image">
                    <img src="./assets/images/emoções/1.png" alt="Emoções" class="emoções" id="emocoes_image">
                    <img src="./assets/images/cor/1.png" alt="Cor" class="cor" id="cor_image">
                    <img src="./assets/images/partecima/1.png" alt="Parte Cima" class="partecima" id="partecima_image">
                    <img src="./assets/images/partebaixa/1.png" alt="Parte Baixa" class="partebaixa" id="partebaixa_image">
                </div>
                <div class="form__avatar--controlers">
                    <div class="avatar__box">
                        Cabelo: 
                        <input type="button" value="←" class="btn" onclick="diminuirCabelo(document.getElementById('cabelo_lego'), document.getElementById('cabelo_image'))">
                        <input class="avatar__input" type="text" name="ipt_cabelo" id="cabelo_lego" value="1">
                        <input type="button" value="→" class="btn" onclick="aumentarCabelo(document.getElementById('cabelo_lego'), document.getElementById('cabelo_image'))">
                    </div>
                    <div class="avatar__box">
                        Rosto: 
                        <input type="button" value="←" class="btn" onclick="diminuirRosto(document.getElementById('rosto_lego'), document.getElementById('rosto_image'))">
                        <input class="avatar__input" type="text" name="" id="rosto_lego" value="1">
                        <input type="button" value="→" class="btn" onclick="aumentarRosto(document.getElementById('rosto_lego'), document.getElementById('rosto_image'))">
                    </div>
                    <div class="avatar__box">
                        Pele: 
                        <input type="button" value="←" class="btn" onclick="diminuirPele(document.getElementById('pele_lego'), document.getElementById('pele_image'))">
                        <input class="avatar__input" type="text" name="" id="pele_lego" value="1">
                        <input type="button" value="→" class="btn" onclick="aumentarPele(document.getElementById('pele_lego'), document.getElementById('pele_image'))">
                    </div>
                    <div class="avatar__box">
                        Tronco: 
                        <input type="button" value="←" class="btn" onclick="diminuirTorso(document.getElementById('tronco_lego'), document.getElementById('tronco_image'))">
                        <input class="avatar__input" type="text" name="" id="tronco_lego" value="1">
                        <input type="button" value="→" class="btn" onclick="aumentarTorso(document.getElementById('tronco_lego'), document.getElementById('tronco_image'))">
                    </div>
                    <div class="avatar__box">
                        Pernas: 
                        <input type="button" value="←" class="btn" onclick="diminuirPerna(document.getElementById('pernas_lego'), document.getElementById('pernas_image'))">
                        <input class="avatar__input" type="text" name="" id="pernas_lego" value="1">
                        <input type="button" value="→" class="btn" onclick="aumentarPerna(document.getElementById('pernas_lego'), document.getElementById('pernas_image'))">
                    </div>
                </div>
            </section>
            <input type="button" value="Cadastrar" class="form__btnCadastrar" onclick="mostraPaths()">
        </form>
    </main>
    <footer class="footer">
        <img class="footer__img" src="./assets/images/footer.png" alt="Rodapé">
    </footer>
    <script src="./assets/scripts/mudaravatar.js"></script>
</body>
</html>
