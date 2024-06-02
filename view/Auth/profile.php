<?php
        require_once('../../required/auth.php');
        require_once('../../required/database.php'); 
        $user_id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>

        <!-- Css -->
        <link rel="stylesheet" href="../../public/css/profile.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
        <?php if(isset($_SESSION['auth'])) { include_once('../components/navbar.php'); } ?>

        <div class="container mt-5">
                <nav class="radio-inputs">
                        <label class="radio">
                                <input type="radio" name="radio" checked="" value="profile" oninput="changeTabs(this)">
                                <span class="name">Meu Perfil</span>
                        </label>
        
                        <label class="radio">
                                <input type="radio" name="radio" oninput="changeTabs(this)" value="pets">
                                <span class="name">Meus Pets Cadastrados</span>

                                <?php 
                                        $sql = "SELECT COUNT(*) as pet_count FROM pets WHERE user_id = {$user_id}";
                                        $sql = $conn->query($sql);
                                        $count = $sql->fetch_assoc()['pet_count'];
                                ?>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        <?= $count ?>
                                        <span class="visually-hidden">unread messages</span>
                                </span>
                        </label>
                </nav>

                <main id="content" class="shadow-sm mt-5">
                     <?php include_once('profile-content/minha-informacoes.php') ?>
                </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="../../public/js/profile.js"></script>
</body>
</html>
