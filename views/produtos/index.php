<!DOCTYPE html>
<html>
<head>
    <title>Gestão de Produtos</title>
</head>
<body>
    <h1>Gestão de Produtos</h1>

    <h3>Criar Novo Produto</h3>
    <form action="index.php?action=store_produto" method="POST">
        <input type="text" name="referencia" placeholder="Referência" required>
        <input type="text" name="descricao" placeholder="Descrição" required>
        <input type="number" step="0.01" name="preco_unitario" placeholder="Preço" required>
        <button type="submit">Gravar</button>
    </form>

    <hr>

    <h3>Lista de Produtos</h3>
    <table border="1" cellpadding="5">
        <tr>
            <th>Ref</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($produtos as $p): ?>
        <tr>
            <td><?= htmlspecialchars($p['referencia']) ?></td>
            <td><?= htmlspecialchars($p['descricao']) ?></td>
            <td><?= htmlspecialchars($p['preco_unitario']) ?> €</td>
            <td>
                <a href="index.php?action=delete_produto&id=<?= $p['id'] ?>" onclick="return confirm('Tem a certeza?')">Apagar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>