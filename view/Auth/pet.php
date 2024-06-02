<?php
    session_start();
    require_once('../../required/database.php');

    $sql = "SELECT * FROM pets WHERE id = {$_GET['id']}";
    $petResult = $conn->query($sql);

    $pet = $petResult->fetch_assoc();

    $pagina_atual = 'http';
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $pagina_atual .= "s";
    }
    $pagina_atual .= "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


    $qr_code_url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($pagina_atual);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

    <!-- Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <?php if(isset($_SESSION['auth'])) { include_once('../components/navbar.php'); } ?>

  
  <main class="container mt-5">
    <div class="d-block mb-3">
        <a href="home.php" class="padrao">Voltar</a>
    </div>
    <div class="pet shadow">
        <div class="row">
            <div class="col-5">
            <img src="<?= '../../public/img/' . $pet['foto'] ?>" class="img-fluid w-100 me-4" alt="">
            </div>
            <div class="col-5">
            <div class="mb-2">
                <label for="" class="padrao d-block">Nome:</label>
                <p class="padrao valores text-truncate text-muted "><?= $pet['nome'] ?></p>
            </div>
            <div class="mb-2">
                <label for="" class="padrao d-block">Raça:</label>
                <p class="padrao valores text-truncate text-muted "><?= $pet['raca'] ?></p>
            </div>
            <div class="mb-2">
                <label for="" class="padrao d-block">Contato:</label>
                <p class="padrao valores text-truncate text-muted "><?= $pet['contato'] ?></p>
            </div>
            <?php if(isset($pet['data_desaparecido']))  { ?>
                <div class="mb-2">
                    <label for="" class="padrao d-block">Data de Desaparecimento:</label>
                    <span class="padrao text-muted"><?= date('d/m/Y', strtotime($pet['data_desaparecido'])) ?></span>
                </div>
            <?php } ?>
            <div class="mb-1">
                <label for="" class="padrao d-block">Detalhes: </label>
                <span class="padrao detalhes text-muted"><?= $pet['detalhes'] ?></span>
            </div>
            <div>
                <img src="<?= $qr_code_url ?>" alt="">
            </div>
            </div>
        </div>
        </div>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>