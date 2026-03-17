<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="destino.php" method="POST">

    <h1>Formulário de Contato</h1>

    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Telefone:</label>
    <input type="number" name="telefone" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Mensagem:</label>
    <textarea name="mensagem" rows="4" required></textarea>

    <button type="submit">Enviar</button>

</form>

</body>
</html>