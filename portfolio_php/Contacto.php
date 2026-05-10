<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Aqui você poderia enviar um e-mail ou salvar no banco de dados
    echo "<h1>Obrigado, $nome!</h1>";
    echo "<p>Recebemos sua mensagem: <i>$mensagem</i></p>";
    echo "<p>Responderemos para <strong>$email</strong> em breve.</p>";
    echo "<br><a href='index.php'>Voltar ao início</a>";
}
?>