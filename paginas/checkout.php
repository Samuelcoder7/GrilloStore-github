<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra - Grillo Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilo/style-checkout.css">
</head>
<body>
    <header class="header">
        <div class="header-content">
            <a href="index.php" class="logo">Grillo Store</a>
            <div class="header-actions">
                <button id="darkModeToggle" class="dark-mode-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" 
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                        class="feather feather-moon">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </button>
                <div class="secure-checkout">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" 
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                        class="feather feather-lock">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                    <span>Compra Segura</span>
                </div>
            </div>
        </div>
    </header>

    <main class="checkout-container">
        <div class="checkout-content">

            <section class="checkout-details">
                <h2 class="section-title">Informações de Envio</h2>
                <form id="checkout-form">
                    <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep" placeholder="00000-000" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Endereço</label>
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group half-width">
                            <label for="number">Número</label>
                            <input type="text" id="number" name="number" required>
                        </div>
                        <div class="form-group half-width">
                            <label for="complement">Complemento</label>
                            <input type="text" id="complement" name="complement">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city">Cidade</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label for="state">Estado</label>
                        <input type="text" id="state" name="state" required>
                    </div>
                </form>

                <h2 class="section-title payment-section-title">Forma de Pagamento</h2>
                <div class="payment-options">
                    <div class="payment-option selected" data-method="credit-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                             class="feather feather-credit-card">
                             <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                             <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <span>Cartão de Crédito</span>
                    </div>
                    <div class="payment-option" data-method="pix">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                             class="feather feather-smartphone">
                             <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                             <line x1="12" y1="18" x2="12" y2="18"></line>
                        </svg>
                        <span>Pix</span>
                    </div>
                    <div class="payment-option" data-method="boleto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                             class="feather feather-barcode">
                             <rect x="3" y="2" width="4" height="20" rx="2" ry="2"></rect>
                             <rect x="8" y="2" width="2" height="20" rx="1" ry="1"></rect>
                             <rect x="11" y="2" width="4" height="20" rx="2" ry="2"></rect>
                             <rect x="16" y="2" width="2" height="20" rx="1" ry="1"></rect>
                             <rect x="19" y="2" width="2" height="20" rx="1" ry="1"></rect>
                        </svg>
                        <span>Boleto Bancário</span>
                    </div>
                </div>

                <div class="payment-form visible" id="credit-card-form">
                    <div class="form-group">
                        <label for="card-number">Número do Cartão</label>
                        <input type="text" id="card-number" name="card-number" required>
                    </div>
                    <div class="form-group">
                        <label for="card-name">Nome no Cartão</label>
                        <input type="text" id="card-name" name="card-name" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group half-width">
                            <label for="card-expiry">Validade</label>
                            <input type="text" id="card-expiry" name="card-expiry" placeholder="MM/AA" required>
                        </div>
                        <div class="form-group half-width">
                            <label for="card-cvv">CVV</label>
                            <input type="text" id="card-cvv" name="card-cvv" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="card-installments">Número de Parcelas</label>
                        <select id="card-installments" name="card-installments">
                            <option value="1">1x sem juros</option>
                            <option value="2">2x sem juros</option>
                            <option value="3">3x sem juros</option>
                        </select>
                    </div>
                </div>

                <div class="payment-form hidden" id="pix-info">
                    <p class="pix-description">
                        O QR Code para pagamento via Pix será gerado após a confirmação do pedido.
                    </p>
                </div>

                <div class="payment-form hidden" id="boleto-info">
                    <p class="boleto-description">
                        O boleto bancário será gerado e enviado para o seu e-mail após a confirmação do pedido.
                    </p>
                </div>

                <div class="action-buttons">
                    <button type="submit" class="submit-button" form="checkout-form">Finalizar Pedido</button>
                    <a href="listagem-produtos.php" class="continue-shopping">Continuar Comprando</a>
                </div>
            </section>

            <aside class="order-summary-sidebar">
                <h2 class="section-title">Resumo do Pedido</h2>

                <div class="order-items" id="order-items">
                    <div class="order-item">
                        <img id="checkout-img" class="item-image" src="..." alt="Produto">
                        <div class="item-details">
                            <p id="checkout-name"></p>
                            <p id="checkout-color"></p>
                        </div>
                        <p class="item-price" id="checkout-price"></p>
                    </div>
                </div>

                <div class="summary-line">
                    <p>Subtotal</p>
                    <p class="summary-value" id="subtotal-value">R$ 0,00</p>
                </div>
                <div class="summary-line">
                    <p>Frete</p>
                    <p class="summary-value" id="shipping-value">Grátis</p>
                </div>
                <div class="summary-total">
                    <h3>Total</h3>
                    <h3 class="summary-value" id="total-value">R$ 0,00</h3>
                </div>
            </aside>
        </div>
    </main>
    
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Grillo Store. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="../script/script-checkout.js"></script>
</body>
</html>