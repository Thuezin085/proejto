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
        <link rel="stylesheet"  href ="../../public/css/cadastro.css...">


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
    </head>
<body>
    <?php include_once('../components/navbar.php') ?>

    <form class="container mt-5 p-5 position-relative">
        <label class="titulo">
            Cadastre seu Pet 
            <span class="ms-2 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M309.6 158.5L332.7 19.8C334.6 8.4 344.5 0 356.1 0c7.5 0 14.5 3.5 19 9.5L392 32h52.1c12.7 0 24.9 5.1 33.9 14.1L496 64h56c13.3 0 24 10.7 24 24v24c0 44.2-35.8 80-80 80H464 448 426.7l-5.1 30.5-112-64zM416 256.1L416 480c0 17.7-14.3 32-32 32H352c-17.7 0-32-14.3-32-32V364.8c-24 12.3-51.2 19.2-80 19.2s-56-6.9-80-19.2V480c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V249.8c-28.8-10.9-51.4-35.3-59.2-66.5L1 167.8c-4.3-17.1 6.1-34.5 23.3-38.8s34.5 6.1 38.8 23.3l3.9 15.5C70.5 182 83.3 192 98 192h30 16H303.8L416 256.1zM464 80a16 16 0 1 0 -32 0 16 16 0 1 0 32 0z"/></svg>
            </span>
        </label>
        <div class="row">
            <div class="col-8">
                <div class="input-cadastro">
                    <input required="" type="search" name="search" autocomplete="off" class="input">
                    <label class="cadastro-label">Nome do Pet</label>
                </div>
            </div>
            
            <div class="col-4">
                <div class="input-cadastro">
                    <input required="" type="search" name="search" autocomplete="off" class="input">
                    <label class="cadastro-label">Raça</label>
                </div>
            </div>

            <div class="col-4">
                <label for="" class="mt-4 mb-2 labelPadrao">Situação:</label>
                <select name="" id="" class="input form-control" oninput="mostrarCampos(this)">
                    <option value="" selected disabled></option>
                    <option value="desaparecido">Desaparecido</option>
                    <option value="registrar">Apenas Registrar</option>
                </select>
            </div>

            <div class="col-4 data_desaparecimento">
                <label for="" class="mt-4 mb-2 labelPadrao">Data de Desaparecimento:</label>
                <input type="date"  class="input form-control">
            </div>
        </div>

        <div class="detalhes mt-5">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <label for="" class="mt-4 mb-2 labelPadrao">Detalhes:</label>
                    <textarea name="" id="" class="input form-control"></textarea>
                </div>
                <div class="col-lg-4 col-12 d-flex flex-column">
                    <label for="" class="mt-4 mb-2 labelPadrao">Foto do Pet:</label>
                    <div class="foto" onclick="$('#fotoPet').trigger('click')">
                        Inserir Foto

                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                        </svg>
                    </div>
                    <input type="file" class="d-none" id="fotoPet">
                </div>       
            </div> 

            <div class="d-flex justify-content-end mt-3">
                <button class="labelPadrao btn btn-cadastrar" type="submit">Cadastrar</button>

            </div>
        </div>

        
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../../public/js/cadastro.js."></script>
</body>
</html>


<!-- 

Nome
Raça
Data de desaparecido 
detalhes
foto
