<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Árvore</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .container {
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
    <h2>Adicionar Árvore</h2>
    <div class="container">
        <?= form_open('/arvore/store') ?>
        <label for="nome_rua">Nome da Rua:</label><br>
        <input type="text" name="nome_rua" required><br>

        <label for="tipo_arvore">Tipo da Árvores:</label><br>
        <input type="text" name="tipo_arvore" required><br>

        <label for="descricao">Descrição:</label><br>
        <input type="text" name="descricao" required><br>

        <label for="data_plantio">Data de Plantio:</label><br>
        <input type="date" name="data_plantio" required><br>

        <button type="submit">Salvar</button>
        <?= form_close() ?>
    </div>
</body>
</html>
