<?php 
    require_once('../required/database.php');
    require_once('../required/auth.php');


$nome = $_POST['nome'];
$raca = $_POST['raca'];
$situacao = $_POST['situacao'];
$contato =  $_POST['contato'];
$data_desaparecimento = $situacao == 'desaparecido' ? $_POST['data_desaparecimento'] : null;
$detalhes = $_POST['detalhes'];

$foto = $_FILES['foto'];
$foto_destino = null;

if (!empty($foto)) {
    $foto_temp = $foto['tmp_name'];
    $foto_nome = $foto['name'];
    $foto_destino = "pets/" . $foto_nome;
}


try {
    $conn->begin_transaction();

    $sql = "INSERT INTO pets (nome, raca, data_desaparecido, contato, detalhes, foto) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nome, $raca, $data_desaparecimento, $contato, $detalhes, $foto_destino);
    $result = $stmt->execute();

    if (!$result) {
        throw new Exception("Erro ao inserir o pet");
    }

    $pet_id = $conn->insert_id;

    $conn->commit();

    if (!empty($foto_destino)) {
        move_uploaded_file($foto_temp, "../public/img/$foto_destino");
    }

} catch (\Throwable $th) {
    $conn->rollback();
    throw $th;
} finally {
    $stmt->close();
}

if ($data_desaparecimento) {
    header("Location: ../view/Auth/home.php");
} else {
    header('Location: ../view/Auth/pet.php?id=' . $pet_id);
}

/*
Contato
opção baixar qr code
demonstrativo de como gerar qr code para seu pet
*/