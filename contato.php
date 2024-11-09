<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Solar - Contato</title>
    <link rel="stylesheet" href="./css/contato.css">
</head>
<body>
    <header>Plan Solar</header>
    <nav>
        <a href="index.php">Início</a>
        <a href="sobre.php">Sobre</a>
        <a href="serviço.php">Serviços</a>
        <a href="contato.php">Contato</a>
    </nav>
    
    <div class="container">
        <h1>Entre em Contato</h1>
        <p>Estamos aqui para responder suas perguntas e ajudá-lo a transformar seu futuro com energia solar.</p>
        
        <form>
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
            
            <button type="submit">Enviar Mensagem</button>
        </form>
    </div>
</body>
</html>
