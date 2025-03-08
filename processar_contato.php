<?php
// processar_contato.php - Processa o formulário de contato

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Aqui você pode adicionar o código para enviar um e-mail ou salvar no banco de dados
    // Exemplo de saída para testes:
    echo "<h2>Mensagem Recebida!</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Mensagem:</strong> $mensagem</p>";
    echo "<p>Obrigado por entrar em contato! Responderemos em breve.</p>";
} else {
    echo "<p>Erro: Método inválido.</p>";
}
?>