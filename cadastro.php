<?php
include 'header.php';
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $valor = $_POST['valor'];

    $conn->query("INSERT INTO apostas (nome, numero, valor) VALUES ('$nome', '$numero', '$valor')");
    echo "<p>Aposta cadastrada com sucesso!</p>";
}
?>

<main>
    <h2>Cadastrar Aposta</h2>
    <form method="POST">
        Nome: <input type="text" name="nome" required><br>
        Número (00-99): <input type="number" name="numero" min="0" max="99" required><br>
        Valor (R$): <input type="number" step="0.01" name="valor" required><br>
        <button type="submit">Cadastrar</button>
    </form>
</main>
