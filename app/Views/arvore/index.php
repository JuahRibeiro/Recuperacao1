<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Árvores</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Controle de Árvores</h2>
    <a href="arvore/create/">Adicionar</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome da Rua</th>
            <th>Tipo da Árvore</th>
            <th>Data de Plantio</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($arvores as $arvore) : ?>
            <tr>
                <td><?= $arvore['id'] ?></td>
                <td><?= $arvore['nome_rua'] ?></td>
                <td><?= $arvore['tipo_arvore'] ?></td>
                <td><?= $arvore['data_plantio'] ?></td>
                <td><?= $arvore['descricao'] ?></td>
                
                <td>
                    <a href="arvore/edit/<?= $arvore['id'] ?>">Editar</a>
                    <a href="arvore/delete/<?= $arvore['id'] ?>" onclick="return confirm('Deseja realmente excluir esta árvore?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
