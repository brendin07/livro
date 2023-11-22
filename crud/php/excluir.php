<?php
include '../system/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $livro_id = $_GET['id'];

    $sql = "DELETE FROM livros WHERE livro_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao excluir livro: " . $conn->error;
    }
}

$conn->close();
?>