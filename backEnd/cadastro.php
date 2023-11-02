<?php 
    require_once('../required/database.php');
    require_once('../required/auth.php');


$nome = $_POST['nome'];
$raca = $_POST['raca'];
$situacao = $_POST['situacao'];
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

    $sql = "INSERT INTO pets (nome, raca, data_desaparecido, detalhes, foto) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nome, $raca, $data_desaparecimento, $detalhes, $foto_destino);
    $result = $stmt->execute();

    $conn->commit();
    if($result && !empty($foto_destino)) {
        move_uploaded_file($foto_temp, "../public/img/$foto_destino");
    }
} catch (\Throwable $th) {
    $conn->rollback();
    throw $th;
}

echo 'cadastrou certo';
$stmt->close();
