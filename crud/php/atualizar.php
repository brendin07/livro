<?php
include '../system/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $livro_id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];

    $sql = "UPDATE livros SET titulo='$titulo', autor='$autor', ano_publicado= '$ano' WHERE livro_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao atualizar livro: " . $conn->error;
    }
}
?>
