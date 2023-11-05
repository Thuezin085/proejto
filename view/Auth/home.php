<?php
        require_once('../../required/auth.php');
        require_once('../../required/database.php');

        $sql = "SELECT * FROM pets WHERE data_desaparecido IS NOT NULL";
        $petsResult = $conn->query($sql);

        $pets = $petsResult->fetch_all(MYSQLI_ASSOC);
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
    <link rel="stylesheet"  href ="../../public/css/navbar.css">
    <link rel="stylesheet"  href ="../../public/css/home.css">

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php include_once('../components/navbar.php') ?>

  <main class="container mt-5">
    <div class="row">

      <div class="col-12">
        <label for="" class="padrao mb-3">Pets Desaparecidos:</label>
      </div>

      <?php
        foreach ($pets as $pet) {
      ?>
          <div class="col-12 col-lg-4 mb-5">
              <div class="pet shadow">
                <div class="row">
                  <div class="col-4 d-flex">
                    <img src="<?= '../../public/img/' . $pet['foto'] ?>" width="100" class="img-fluid me-4 imgDaHome" alt="">
                  </div>
                  <div class="col-8">
                    <div class="mb-2">
                      <label for="" class="padrao d-block">Nome:</label>
                      <p class="padrao valores text-truncate text-muted "><?= $pet['nome'] ?></p>
                    </div>
                      
                    <label for="" class="padrao d-block">Raça:</label>
                    <p class="padrao valores text-truncate text-muted "><?= $pet['raca'] ?></p>
                  </div>
                </div>
                
                  <hr class="my-2">

                  <div class="mb-2">
                    <label for="" class="padrao d-block">Data de Desaparecimento:</label>
                    <span class="padrao text-muted"><?= date('d/m/Y', strtotime($pet['data_desaparecido'])) ?></span>
                  </div>

                  <div class="mb-1">
                    <label for="" class="padrao d-block">Detalhes: </label>
                    <span class="padrao detalhes text-muted"><?= $pet['detalhes'] ?></span>
                  </div>

                  <div class="w-100 d-flex justify-content-end">
                    <a href="pet.php?id=<?= $pet['id'] ?>" class="padrao">Detalhes</a>
                  </div>
              </div>
          </div>
      <?php } ?> 

    </div>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>