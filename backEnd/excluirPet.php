<?php 
require_once('../required/database.php');
require_once('../required/auth.php');

$pet_id = $_GET['pet_id'];

try {
    $conn->begin_transaction();

    $sql = "DELETE FROM pets WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $pet_id); 
    
    $result = $stmt->execute();

    if (!$result) {
        throw new Exception("Erro ao excluir o pet");
    }

    $conn->commit();
} catch (\Throwable $th) {
    $conn->rollback();
    throw $th;
} finally {
    if (isset($stmt)) {
        $stmt->close();
    }
    if (isset($conn)) {
        $conn->close();
    }
}

header("Location: {$_SERVER['HTTP_REFERER']}");
exit();
