<?php
include 'header.php';
include 'db.php';

// Edição de dados
if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $valor = $_POST['valor'];

    $conn->query("UPDATE apostas SET nome='$nome', numero='$numero', valor='$valor' WHERE id=$id");
    echo "<p>Aposta editada com sucesso!</p>";
}

// Listagem
$result = $conn->query("SELECT * FROM apostas");
?>

<main>
    <h2>Lista de Apostas</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Número</th>
            <th>Valor</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <form method="POST">
                <td><?= $row['id'] ?></td>
                <td><input type="text" name="nome" value="<?= $row['nome'] ?>"></td>
                <td><input type="number" name="numero" value="<?= $row['numero'] ?>" min="0" max="99"></td>
                <td><input type="number" step="0.01" name="valor" value="<?= $row['valor'] ?>"></td>
                <td>
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <button type="submit" name="editar">Salvar</button>
                    <a href="remover.php?id=<?= $row['id'] ?>" onclick="return confirm('Tem certeza?')">Remover</a>
                </td>
            </form>
        </tr>
        <?php endwhile; ?>
    </table>
</main>
