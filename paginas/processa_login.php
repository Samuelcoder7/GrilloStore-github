<?php
session_start();
include_once('conexao.php');

// 1. Verifica se o formulário foi submetido (se o botão 'submit' foi clicado)
if (isset($_POST['submit'])) {

    // Inclui a conexão com o banco de dados (que fornece a variável $conexao)
    include_once('conexao.php');

    // Recebe os dados do formulário
    $email = trim($_POST['email']);
    $senha_digitada = $_POST['senha']; // Senha em texto puro digitada pelo usuário

    // Verifica se o email é válido (opcional, mas recomendado)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['erro_login'] = "Email inválido.";
        header('Location: login.php');
        exit;
    }

    // 2. Consulta Preparada: Busca o usuário apenas pelo email
    // Pegamos o ID, nome e o HASH da senha para verificação
    $sql = "SELECT id, nome_completo, email, senha FROM usuarios WHERE email = ?";
    
    // Prepara a instrução
    $stmt = $conexao->prepare($sql);

    // Verifica se a preparação falhou
    if ($stmt === false) {
        die('Erro na preparação da consulta: ' . $conexao->error);
    }
    
    // Associa o parâmetro (s = string)
    $stmt->bind_param("s", $email);
    
    // Executa
    $stmt->execute();
    
    // Obtém o resultado
    $result = $stmt->get_result();
    
    // 3. Verifica o Resultado da Busca
    if ($result->num_rows === 1) {
        
        $usuario = $result->fetch_assoc();
        $senha_hash = $usuario['senha']; // HASH da senha salva no banco
        
        // 4. VERIFICAÇÃO FINAL DE SENHA (USANDO O HASH)
        // Compara a senha digitada com a senha hash salva no banco
        if (password_verify($senha_digitada, $senha_hash)) {
            
            // LOGIN BEM-SUCEDIDO: Cria as variáveis de Sessão
            // (Adicionei a variável 'logado' para facilitar a proteção das páginas)
            $_SESSION['logado'] = true;
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome_completo']; // Usando nome_completo como no cadastro
            $_SESSION['usuario_email'] = $usuario['email'];
            
            // Redireciona para a página principal
            header('Location: Principal.php');
            exit;
            
        } else {
            // Senha Incorreta
            $_SESSION['erro_login'] = "Email ou senha inválidos.";
            header('Location: login.php');
            exit;
        }
        
    } else {
        // Usuário (email) não encontrado
        $_SESSION['erro_login'] = "Email ou senha inválidos.";
        header('Location: login.php');
        exit;
    }
    
    $stmt->close();
    $conexao->close();

} else {
    // Acesso direto ao arquivo, redireciona para o formulário
    header('Location: login.php');
    exit;
}
?>