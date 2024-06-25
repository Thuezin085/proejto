<?php
    require_once('../../../required/auth.php');
    require_once('../../../required/database.php');


    $user_id = $_SESSION['id'];
    $sql = "SELECT * FROM pets WHERE user_id = {$user_id}";

    $petsResult = $conn->query($sql);

    $pets = $petsResult->fetch_all(MYSQLI_ASSOC);
?>


<div class="row">
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

                  <?php if ($pet['data_desaparecido']) { ?>
                    <div class="mb-2">
                      <label for="" class="padrao d-block">Data de Desaparecimento:</label>
                      <span class="padrao text-muted"><?= date('d/m/Y', strtotime($pet['data_desaparecido'])) ?></span>
                    </div>
                  <?php } ?>
                  <div class="mb-2">
                        <label for="" class="padrao d-block">Contato:</label>
                        <p class="padrao valores text-truncate text-muted "><?= $pet['contato'] ?></p>
                  </div>

                  <div class="mb-1">
                    <label for="" class="padrao d-block">Detalhes: </label>
                    <span class="padrao detalhes text-muted"><?= $pet['detalhes'] ?></span>
                  </div>

                  <div class="w-100 d-flex justify-content-end">
                    <a href="../../backEnd/excluirPet.php?pet_id=<?= $pet['id'] ?>" class="padrao text-danger me-3">Excluir</a>
                    <a href="pet.php?id=<?= $pet['id'] ?>" class="padrao">Detalhes</a>
                  </div>
              </div>
          </div>
      <?php } ?> 

    </div>