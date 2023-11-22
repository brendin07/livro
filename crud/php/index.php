<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Agendamento de Livros</title>
</head>

<body>
    <div class="container">
        <h2>Listagem de Livros</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano de Publicado</th>
                <th>Ações</th>
            </tr>

            <?php
            include '../system/conexao.php';

            $sql = "SELECT * FROM livros";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . (isset($row['id']) ? $row['id'] : '') . "</td>
                            <td>" . (isset($row['titulo']) ? $row['titulo'] : '') . "</td>
                            <td>" . (isset($row['autor']) ? $row['autor'] : '') . "</td>
                            <td>" . (isset($row['ano_publicado']) ? $row['ano_publicado'] : '') . "</td>
                            <td>
                                <a href='editar.php?id=" . (isset($row['id']) ? $row['id'] : '') . "'>Editar</a>
                                <a href='excluir.php?id=" . (isset($row['id']) ? $row['id'] : '') . "'>Excluir</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhum livro encontrado.</td></tr>";
            }
            ?>
        </table>
        <br>
        <a class="add-button" href="adicionar.php">Adicionar Livro</a>
    </div>
</body>

</html>