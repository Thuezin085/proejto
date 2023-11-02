<?php
require_once('../required/database.php');


$email = $_POST['email'];
$senha = md5($_POST['senha']);

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ? LIMIT 1");
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    if ($senha == $user['senha']) {

        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['auth'] = true;
        $_SESSION['nome'] = $user['nome'];

        // Redirect to the home page
        header('Location: ../view/Auth/home.php');
        exit();
    } else {
        // Password is incorrect
        echo "Senha incorreta";
    }
} else {
    // No user found with the given email
    echo "Usuário não encontrado";
}