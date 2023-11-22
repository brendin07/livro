<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adicionar.css">
    
    <title>Adicionar Livro</title>
    
</head>

<body>
    <form action="salvar.php" method="post">
        <h2>Adicionar Livro</h2>
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required>
        <br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" required>
        <br>
        <label for="ano">Ano de Publicação:</label>
        <input type="number" name="ano" required>
        <br>
        <input type="submit" value="Adicionar Livro">
    </form>
    <br>
    
</body>

</html>

