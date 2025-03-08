<?php
// index.php - Landing Page com Carrossel de Imagens
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa de IA para Automação</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <!-- Cabeçalho com Carrossel -->
    <header class="hero">
        <div class="carousel-container">
            <div class="carousel">
                <img src="images/ia1.jpg" alt="Inteligência Artificial" class="carousel-image active">
                <img src="images/ia2.jpg" alt="Robótica Avançada" class="carousel-image">
                <img src="images/ia3.jpg" alt="Análise de Dados" class="carousel-image">
                <img src="images/ia4.jpg" alt="Automação Empresarial" class="carousel-image">
            </div>
        </div>
        <div class="container">
            <h1>Bem-vindo à <span class="highlight">Nome da Empresa</span></h1>
            <p>Soluções inteligentes de IA para automação empresarial.</p>
            <a href="#sobre" class="btn-primary">Saiba Mais</a>
        </div>
    </header>

    <!-- Sobre Nós -->
    <section id="sobre" class="section">
        <div class="container">
            <h2>Sobre Nós</h2>
            <p>A <strong>Nome da Empresa</strong> é pioneira no desenvolvimento de soluções de IA para automação de processos empresariais. Combinamos tecnologia avançada e expertise para transformar sua operação.</p>
        </div>
    </section>

    <!-- Serviços Oferecidos -->
    <section id="servicos" class="section">
        <div class="container">
            <h2>Nossas Soluções</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Automação de Processos</h3>
                    <p>Otimização de fluxos de trabalho com IA.</p>
                </div>
                <div class="service-card">
                    <h3>Chatbots Inteligentes</h3>
                    <p>Atendimento automatizado e personalizado.</p>
                </div>
                <div class="service-card">
                    <h3>Análise de Dados</h3>
                    <p>Insights baseados em IA para decisões estratégicas.</p>
                </div>
                <div class="service-card">
                    <h3>Robótica Avançada</h3>
                    <p>Integração de robôs em operações industriais.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="section">
        <div class="container">
            <h2>Entre em Contato</h2>
            <form action="processar_contato.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

                <button type="submit" class="btn-primary">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>&copy; 2023 Nome da Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>