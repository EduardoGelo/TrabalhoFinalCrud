<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
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

    body, h1, h2, h3, h4, h5, h6 {
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
            <h1 class="w3-margin w3-jumbo">ARTES DA TIA EVA(ADMIN)</h1>
            <p class="w3-xlarge">Cadastre os produtos e clientes aqui</p>
        </header>
    </x-app-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Cadastrar produto</h2>
                <!-- <form method="post" action="validarProduto.php">
                    <div class="form-group"> <label for="nome">Nome:</label> <input type="text" class="form-control"
                            id="nome" name="nome" required> </div>
                    <div class="form-group"> <label for="preco">Preço:</label> <input type="number" class="form-control"
                            id="preco" name="preco" step="0.01" required> </div>
                    <div class="form-group"> <label for="quantidade">Quantidade:</label> <input type="number"
                            class="form-control" id="quantidade" name="quantidade" required> </div>
                    <div class="form-group"> <label for="categoria">Categoria:</label> <input type="number"
                            class="form-control" id="categoria" name="categoria" required> </div>
                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                </form>TEM QUE TRANSFORMAR ESSA TABELA DE BOOTSTRAP PRA TAILWIND -->
            </div>
        </div>
    </div>
</body>

</html>