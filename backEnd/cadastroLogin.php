<?php
require_once('../required/database.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

try {
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");

    $stmt->bind_param('sss', $nome, $email, $senha);
    
    if($stmt->execute()) {
        session_start();


        $_SESSION['id'] = $conn->insert_id;
        $_SESSION['auth'] = true;
        $_SESSION['nome'] = $nome;
        
        header('Location: ../view/Auth/home.php');
    }
} catch (mysqli_sql_exception $e) {
    echo "Erro ao inserir registro no banco de dados: " . $e->getMessage();
}
?>
