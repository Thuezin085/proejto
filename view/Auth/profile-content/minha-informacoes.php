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
        <span class="padrao font16 text-muted bg-light p-2 rounded">Alterar informações de login</span>
    </div>



    <div class="font-12 mt-5">
        <label for="" class="padrao">Login:</label>
        <input type="text" value="<?= $user['email'] ?>" class="padrao form-control">
    </div>

    <div class="font-12 mt-5 row">
        <div class="col-6">
            <label for="" class="padrao">Nova Senha:</label>
            <input type="text" class="padrao form-control">
        </div>

        <div class="col-6">
            <label for="" class="padrao">Confirmar Senha:</label>
            <input type="text" class="padrao form-control">
        </div>
    </div>


    <div class="d-flex justify-content-end mt-3">
        <button class="btn btn-success padrao font-12">
            Salvar
        </button>
    </div>
</form>