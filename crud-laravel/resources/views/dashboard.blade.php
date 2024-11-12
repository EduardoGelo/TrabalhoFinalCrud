<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artes da Tia Eva</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .background {
        background-image: url('{{ asset('images/bg_inicial.jpg') }}');
    }

    .banner {
        background-size: cover;
        background-position: center;
        padding: 50px 20px;
        text-align: center;
        position: relative;
    }

    .banner h1 {
        font-size: 2.5em;
        margin: 0;
    }

    .banner p {
        font-size: 1.2em;
        margin: 10px 0;
    }

    .banner .cta-button {
        background-color: #ff5733;
        /* Cor do botão */
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .banner .cta-button:hover {
        background-color: #c0392b;
        /* Cor do botão ao passar o mouse */
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Lato", sans-serif
    }

    .w3-bar,
    h1,
    button {
        font-family: "Montserrat", sans-serif
    }

    .fa-anchor,
    .fa-coffee {
        font-size: 200px
    }
</style>

<body>
    <x-app-layout>
        <!-- header com imagem maior -->
        <header class="w3-container w3-pink w3-center"
            style="padding:128px 16px; background-image: url('images/bg_inicial.jpg'); background-size: cover; background-position: center;">
            <h1 class="w3-margin w3-jumbo">ARTES DA TIA EVA</h1>
            <p class="w3-xlarge">Confira nossos produtos!</p>
            <button class="w3-button w3-pink rounded-lg w3-padding-large w3-large w3-margin-top">Ver produtos</button>
        </header>
        <!-- primeira grid sobre mim -->
        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-twothird">
                    <h1>Lorem Ipsum</h1>
                    <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

                    <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
<!-- ESSE FA TA DESREGULADO. AJEITA AS ASPAS -->
                <div class="w3-third w3-center">
                    <i class="fa fa-paperclip class="fa fa-paperclip style="font-size: 100px; w3-padding-64 w3-text-pink"></i>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>