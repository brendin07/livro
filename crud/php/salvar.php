<?php
include '../system/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];

    $sql = "INSERT INTO livros (titulo, autor, ano_publicado) VALUES ('$titulo', '$autor', '$ano')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao adicionar livro: " . $conn->error;
    }
}
?>
