<?php
echo "<h1>Dados Recebidos</h1>";

echo "<strong>Nome:</strong> " . $_REQUEST['nome'] . "<br>";
echo "<strong>Telefone:</strong> " . $_REQUEST['telefone'] . "<br>";
echo "<strong>Email:</strong> " . $_REQUEST['email'] . "<br>";
echo "<strong>Mensagem:</strong> " . $_REQUEST['mensagem'] . "<br><br>";

echo "<h2>Método HTTP Utilizado</h2>";
echo $_SERVER['REQUEST_METHOD'] . "<br><br>";

echo "<h2>Cabeçalhos da Requisição HTTP</h2>";

$headers = apache_request_headers();

foreach ($headers as $chave => $valor) {
    echo "<strong>$chave:</strong> $valor <br>";
}
?>