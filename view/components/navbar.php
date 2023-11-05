<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand mr-3">
        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L269.4 2.9zM160.9 286.2c4.8 1.2 9.9 1.8 15.1 1.8c35.3 0 64-28.7 64-64V160h44.2c12.1 0 23.2 6.8 28.6 17.7L320 192h64c8.8 0 16 7.2 16 16v32c0 44.2-35.8 80-80 80H272v50.7c0 7.3-5.9 13.3-13.3 13.3c-1.8 0-3.6-.4-5.2-1.1l-98.7-42.3c-6.6-2.8-10.8-9.3-10.8-16.4c0-2.8 .6-5.5 1.9-8l15-30zM160 160h40 8v32 32c0 17.7-14.3 32-32 32s-32-14.3-32-32V176c0-8.8 7.2-16 16-16zm128 48a16 16 0 1 0 -32 0 16 16 0 1 0 32 0z"/></svg>
        <span class="ms-2">PetLoc8 </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 w-100 d-flex justify-content-between">

            <li class="nav-item"></li>
              
            <li class="nav-item d-flex">
              <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/proejto/view/Auth/home.php')  { echo 'active'; } ?>" href="home.php">HOME</a>
              <a class="nav-link ms-5 <?php if($_SERVER['PHP_SELF'] == '/proejto/view/Auth/cadastro.php')  { echo 'active'; } ?>" href="cadastro.php">CADASTRE SEU PET</a>
              <a class="nav-link ms-5 <?php if($_SERVER['PHP_SELF'] == '/proejto/view/Auth/instrucoes.php')  { echo 'active'; } ?>" href="instrucoes.php">INSTRUÇÕES</a>
            </li>


            <li class="nav-item d-flex align-items-center justify-content-center">
              <div class="dropdown dropstart">
              <a class="botaoDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                <?= $_SESSION['nome'] ?>
              </a>
                
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item text-dark" href="profile.php">Meu Perfil</a></li>
                  <li><a class="dropdown-item text-danger" href="../../backEnd/logout.php">Sair</a></li>
                </ul>
              </div>
            </li>
        </ul>
      </div>
    </div>
</nav>