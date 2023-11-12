<?php
        require_once('../../required/auth.php');
        require_once('../../required/database.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

        <!-- Css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet"  href ="../../public/css/navbar.css">
        <link rel="stylesheet"  href ="../../public/css/home.css.">


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Instruções</title>
        <style>
            body {
                    background-color: #A2B6FD!important;
                }
        </style>
    </head>
<body>
    <?php include_once('../components/navbar.php') ?>

    <div class="container mt-5 p-4 py-5">

        <label for="" class="padrao mb-3 px-2 py-1 bg-white rounded shadow-sm" style="font-size: 1.6rem;">Instruções para Gerar seu QR CODE !</label>

        <div class="row mt-5">
            <div class="col-6 mb-5">
                <label for="" class="bg-white px-2 py-1 padrao shadow-sm rounded">1. Cadastre o seu Pet e Tenha Acesso ao QR Code:</label>
                <img src="../../public/img/guide1.png" class="img-fluid" width="500" alt="">
            </div>
            <div class="col-6 mb-5">
                <label for="" class="bg-white px-2 py-1 padrao shadow-sm rounded">2. Baixe o QR Code, imprima e o recorte:</label>
                <img src="../../public/img/guide2.png" class="img-fluid" width="500" alt="">
            </div>
            <div class="col-6">
                <label for="" class="bg-white px-2 py-1 padrao shadow-sm rounded">3. Coloque o QR na coleira do seu Pet:</label>
                <img src="../../public/img/guide3.png" class="img-fluid" width="500" alt="">
            </div>
            <div class="col-6">
                <label for="" class="bg-white px-2 py-1 padrao shadow-sm rounded">4. Ao scannear o QR code terá acesso as informações de seu Pet:</label>
                <img src="../../public/img/guide4.png" class="img-fluid" width="500" alt="">
            </div>
        </div>

    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

