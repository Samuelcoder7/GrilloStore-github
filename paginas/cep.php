        <?php
        // Não apaga isso!!!
        session_start();
        if (!isset($_SESSION['usuario_id'])) // Verifica se o usuário está logado

        {
            header('Location: login.php'); // Redireciona para a página de login se não estiver logado
            exit;
        }

        ?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Inserir CEP - GrilloStore</title>
<link rel="stylesheet" href="../css/style.css">

    <style>
        /* Estilos mínimos para o formulário (ajuste conforme seu CSS) */
        .container { max-width: 640px; margin: 40px auto; padding: 0 16px; }
        form label { display: block; margin: 12px 0 6px; font-weight: 600; }
        input[type="text"] { width: 100%; padding: 8px 10px; box-sizing: border-box; }
        .btn-primary { margin-top: 16px; padding: 10px 14px; background:#007bff; color:#fff; border:none; cursor:pointer; }
        .form-row { display:flex; gap:12px; }
        .form-row .col { flex:1; }
        .small { font-size:13px; color:#666; margin-top:6px; }
    </style>

</head>
<body>
<main class="container">
    <h1>Inserir Endereço</h1>

    <form id="cep-form" method="POST" action="processa-cep.php" novalidate>
        <label for="cep">CEP</label>
        <input type="text" id="cep" name="cep" maxlength="9" placeholder="00000-000" required>

        <label for="logradouro">Logradouro</label>
        <input type="text" id="logradouro" name="logradouro" readonly>

        <div class="form-row">
            <div class="col">
                <label for="numero">Número</label>
                <input type="text" id="numero" name="numero" required>
            </div>
            <div class="col">
                <label for="complemento">Complemento</label>
                <input type="text" id="complemento" name="complemento">
            </div>
        </div>

        <label for="bairro">Bairro</label>
        <input type="text" id="bairro" name="bairro" readonly>

        <div class="form-row">
            <div class="col">
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade" readonly>
            </div>
            <div class="col">
                <label for="estado">Estado</label>
                <input type="text" id="estado" name="estado" maxlength="2" readonly>
            </div>
        </div>

        <p class="small">Os campos logradouro, bairro, cidade e estado são preenchidos automaticamente pelo ViaCEP. Informe número e complemento se necessário.</p>

        <button type="submit" class="btn-primary">Salvar Endereço</button>
        <a href="Principal.php" style="margin-left:12px;">Voltar</a>
    </form>
</main>

                <script>
                (function () {
                    const cepInput = document.getElementById('cep');
                    const form = document.getElementById('cep-form');
                    const logradouro = document.getElementById('logradouro');
                    const bairro = document.getElementById('bairro');
                    const cidade = document.getElementById('cidade');
                    const estado = document.getElementById('estado');
                    const complemento = document.getElementById('complemento');

                    // Máscara simples para CEP: 00000-000
                    cepInput.addEventListener('input', (e) => {
                        let v = e.target.value.replace(/\D/g, '');
                        if (v.length > 5) v = v.slice(0,5) + '-' + v.slice(5,8);
                        e.target.value = v;
                    });

                    // Ao perder o foco, consulta ViaCEP
                    cepInput.addEventListener('blur', async () => {
                        const cep = cepInput.value.replace(/\D/g, '');
                        if (cep.length !== 8) return;
                        try {
                            const res = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
                            if (!res.ok) throw new Error('Resposta inválida');
                            const data = await res.json();
                            if (data.erro) {
                                alert('CEP não encontrado.');
                                logradouro.value = bairro.value = cidade.value = estado.value = '';
                                return;
                            }
                            logradouro.value = data.logradouro || '';
                            bairro.value = data.bairro || '';
                            cidade.value = data.localidade || '';
                            estado.value = data.uf || '';
                            complemento.value = data.complemento || '';
                        } catch (err) {
                            console.error(err);
                            alert('Erro ao buscar o CEP. Tente novamente.');
                        }
                    });

                    // Validação simples antes de enviar
                    form.addEventListener('submit', (e) => {
                        const cepDigits = cepInput.value.replace(/\D/g, '');
                        if (cepDigits.length !== 8) {
                            e.preventDefault();
                            alert('Informe um CEP válido (8 dígitos).');
                            cepInput.focus();
                            return;
                        }
                        if (!document.getElementById('numero').value.trim()) {
                            e.preventDefault();
                            alert('Informe o número do endereço.');
                            document.getElementById('numero').focus();
                            return;
                        }
                        // Opcional: normalizar CEP antes de enviar (sem máscara)
                        // cria um campo oculto com CEP só dígitos ou sobrepõe o valor:
                        cepInput.value = cepDigits;
                    });
                })();

                </script>


</body>
</html>