<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Árvore</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Editar Árvore</h2>

    <?= form_open('/arvore/update') ?>
    <input type="hidden" name="id" value="<?= $arvore['id'] ?>">

    <label for="nome_rua">Nome da Rua:</label><br>
    <input type="text" name="nome_rua" value="<?= $arvore['nome_rua'] ?>" required><br>

    <label for="tipo_arvores">Tipo da Árvore:</label><br>
    <input type="text" name="tipo_arvore" value="<?= $arvore['tipo_arvore'] ?>" required><br>

    <label for="descricao">Descrição:</label><br>
    <input type="text" name="descricao" value="<?= $arvore['descricao'] ?>" required><br>

    <label for="data_plantio">Data de Plantio:</label><br>
    <input type="date" name="data_plantio" value="<?= $arvore['data_plantio'] ?>" required><br>

    <button type="submit">Atualizar</button>
    <?= form_close() ?>
</body>
</html>
