<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Como podemos te ajudar? - Grillo Store</title>
    <link rel="stylesheet" href="../estilo/contrato.css">
</head>
<body>
    <div class="form-contato">
        <h2>Como podemos te ajudar?</h2>

        <form id="formContato" method="POST">
            <div class="form-group">
                <label for="nome">Seu Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">Seu E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" required placeholder="Descreva como podemos ajudá-lo..."></textarea>
            </div>

            <button type="submit" name="submit">Enviar Mensagem</button>
        </form>
    </div>

    <!-- Popup de Sucesso -->
    <div id="popupSuccess" class="popup">
        <div class="popup-content">
            <span class="close-popup">&times;</span>
            <div class="popup-icon">✅</div>
            <h3>Mensagem Enviada!</h3>
            <p>Sua mensagem foi enviada com sucesso. Entraremos em contato em breve.</p>
            <button class="btn-close">OK</button>
        </div>
    </div>

    <!-- Popup de Erro -->
    <div id="popupError" class="popup">
        <div class="popup-content">
            <span class="close-popup">&times;</span>
            <div class="popup-icon">❌</div>
            <h3>Erro ao Enviar</h3>
            <p>Houve um erro ao enviar sua mensagem. Tente novamente.</p>
            <button class="btn-close">Tentar Novamente</button>
        </div>
    </div>

    <script>
     document.getElementById('formContato').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    // 🔄 AGORA USA O MESMO enviar_email.php (mas ele manda pro WhatsApp)
    fetch('enviar_whatsapp.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if(data.startsWith('success|')) {
            const parts = data.split('|');
            const whatsappUrl = parts[1];
            
            // Mostra popup
            document.getElementById('popupSuccess').style.display = 'flex';
            document.getElementById('formContato').reset();
            
            // Abre WhatsApp
            setTimeout(() => {
                window.open(whatsappUrl, '_blank');
            }, 2000);
            
        } else {
            document.getElementById('popupError').style.display = 'flex';
        }
    })
    .catch(error => {
        document.getElementById('popupError').style.display = 'flex';
    });
});
    </script>
</body>
</html>