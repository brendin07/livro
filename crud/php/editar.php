<?php
include '../system/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $livro_id = $_GET['id'];

    $sql = "SELECT * FROM livros WHERE livro_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $livro = $result->fetch_assoc();
    } else {
        echo "Livro não encontrado.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/editar.css">
    <title>Editar Livro</title>
    
</head>

<body>
    <form action="atualizar.php" method="post">
        <h2>Editar Livro</h2>
        <input type="hidden" name="id" value="<?php echo $livros['id']; ?>">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="<?php echo $livro['titulo']; ?>" required>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" value="<?php echo $livro['autor']; ?>" required>
        <label for="ano">Ano de Publicado:</label>
        <input type="number" name="ano" value="<?php echo $livros['ano_publicado']; ?>" required>
        <input type="submit" value="Atualizar Livro">
    </form>
</body>

</html>