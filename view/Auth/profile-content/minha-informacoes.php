<?php

    $auth = '../../../required/auth.php';
    $database = '../../../required/database.php';

    if (file_exists($auth) && file_exists($database)) {
        require_once($auth);
        require_once($database);
    }


    $sql = "SELECT * FROM usuarios WHERE id = {$_SESSION['id']}";
    $user_query = $conn->query($sql);

    $user = $user_query->fetch_assoc();
?>


<form action="" method="post">
    <div class="my-2">
        <span class="padrao font16 text-muted bg-light p-2 rounded">Minhas Informações</span>
    </div>



    <div class="font-12 mt-5">
        <label for="" class="padrao">Nome:</label>
        <input type="text" disabled value="<?= $user['nome'] ?>" class="padrao form-control">
    </div>

    <div class="font-12 mt-5">
        <label for="" class="padrao">Email:</label>
        <input type="text" disabled value="<?= $user['email'] ?>" class="padrao form-control">
    </div>
    
</form>