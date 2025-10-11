<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="page-title">Cabo de Carga para Bateria Chupeta 3,5M Famastil - Grillo Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilo/style-produto.css">
    </head>

<body>

    <div id="notification-popup">
        Produto adicionado com sucesso!
    </div>

    <header class="header">
        <div class="header-content">
            <a href="listagem-produtos.php" class="logo">Grillo Store</a>
            <div class="header-actions">
                <button id="darkModeToggle" class="dark-mode-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-moon">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </button>
                <div class="cart-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-shopping-cart">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <div class="cart-flyout" id="cart-flyout">
        <div class="flyout-content-wrapper">
            <div class="flyout-header">
                <h3>Seu Carrinho</h3>
                <button class="close-flyout" id="close-cart-flyout">&times;</button>
            </div>
            <div class="flyout-body">
                <p>Seu carrinho está vazio.</p>
            </div>
            <div class="flyout-footer">
                <div class="flyout-actions">
                    <button class="back-button" id="continue-shopping">Continuar Comprando</button>
                    <a href="#" class="checkout-button">Finalizar Compra</a>
                </div>
            </div>
        </div>
    </div>

    <main class="product-page-container">
        <a href="listagem-produtos.php" class="back-button">
            &larr; Voltar para a página de produtos
        </a>

        <div class="product-content-wrapper">

            <div class="product-images">
                <div class="thumbnail-gallery" id="thumbnail-gallery">
                    <img src="../imagens-produtos/chu1.jpg" alt="Chupeta de carro img 1" class="thumbnail-image"
                        data-full="../imagens-produtos/chu2.jpg">
                    <img src="../imagens-produtos/chu2.jpg" alt="Chupeta de carro" class="thumbnail-image"
                        data-full="../imagens-produtos/chu2.jpg">
                    <img src="../imagens-produtos/chu3.jpg" alt="Chupeta de carro" class="thumbnail-image"
                        data-full="../imagens-produtos/chu3.jpg">
                    <img src="../imagens-produtos/chu4.jpg" alt="Chupeta de carro" class="thumbnail-image"
                        data-full="../imagens-produtos/chu4.jpg">
                    <img src="../imagens-produtos/chu5.jpeg" alt="Chupeta de carro" class="thumbnail-image"
                        data-full="../imagens-produtos/chu5.jpeg">
                </div>
                <div class="main-image-container">
                    <img src="../imagem/pola1.jpg"
                        alt="Câmera Fotográfica Digital Profissional A6x G Zoom Cor Preto EZSEP487"
                        class="main-product-image" id="main-product-image">
                </div>
            </div>

            <div class="product-info-details">
                <h1 class="product-title" id="product-title">Cabo de Carga para Bateria Chupeta 3,5M Famastil</h1>
                <div class="price-section">
                    <p class="price-label">À vista</p>
                    <p class="price-value" id="price-value">R$ 66,16</p>
                    <p class="installments" id="installments-text">ou 2x de R$ 34,82 sem juros</p>
                    <a href="#" class="payment-methods-link">ver meios de pagamento</a>
                </div>

                <div class="product-specs">
                    <p class="spec-color" id="product-color">Cor: <span class="spec-value"
                            id="product-color-value">Preto e Vermelho </span></p>
                    <h2 class="specs-title">O que você precisa saber sobre este produto</h2>
                    <ul class="specs-list" id="specs-list">
                        <li>Bolsa exclusiva para transporte</li>
                        <li>3 5m de comprimento</li>
                        <li>Cabo de transferência de cargas</li>
                        <li>300 amperes</li>
                        <li>Garantia 1 Ano</li>
                    </ul>
                </div>
            </div>

            <aside class="purchase-sidebar">
                <div class="sidebar-price-block">
                    <div class="current-price-display">
                        <span class="current-price" id="current-price-sidebar">R$ 66,16</span>
                        <label class="price-option-radio">
                            <input type="radio" name="priceOption" checked>
                        </label>
                    </div>
                    <p class="free-shipping">Frete Grátis a cima de R$19</p>
                    <p class="delivery-estimate">Chega entre Quarta-feira e Quinta-feira</p>
                    <div class="installments-display">
                        <span class="installment-amount" id="installment-amount-sidebar">2x de R$ 34,82</span>
                        <span class="installment-details" id="installment-details-sidebar">sem juros</span>
                        <label class="price-option-radio">
                            <input type="radio" name="priceOption">
                        </label>
                    </div>
                </div>

                <div class="delivery-info-block">
                    <p class="delivery-details-link">Mais detalhes da forma de entrega</p>
                    <p class="stock-status">Estoque Disponível</p>
                    <div class="quantity-selector">
                        <label for="quantity">Quantidade:</label>
                        <select id="quantity">
                            <option value="1">1 Unidade</option>
                            <option value="2">2 Unidades</option>
                            <option value="3">3 Unidades</option>
                        </select>
                    </div>
                </div>

                <div class="action-buttons">
                    <a href="checkout.php?produto=produto-8-chupeta.php" class="buy-now-button">Comprar Agora</a>
                    <button class="add-to-cart-button" id="add-to-cart-button">Adicionar ao Carrinho</button>
                </div>

                <div class="seller-info">
                    <p>Vendido por: <span class="seller-name" id="seller-name">Básicos</span></p>
                </div>
            </aside>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-columns">
                <div class="footer-col">
                    <h3 class="footer-title">Grillo Store</h3>
                    <p>Nossa missão é trazer a melhor qualidade com o preço justo.</p>
                </div>
                <div class="footer-col">
                    <h3 class="footer-title">Institucional</h3>
                    <ul>
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Trabalhe Conosco</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3 class="footer-title">Ajuda</h3>
                    <ul>
                        <li><a href="#">Fale Conosco</a></li>
                        <li><a href="#">Trocas e Devoluções</a></li>
                        <li><a href="#">Rastrear Pedido</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3 class="footer-title">Redes Sociais</h3>
                    <div class="social-links">
                        <a href="#">Facebook</a> |
                        <a href="#">Instagram</a> |
                        <a href="#">Twitter</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Grillo Store. Todos os direitos reservados. | CNPJ: 00.000.000/0001-00</p>
            </div>
        </div>
    </footer>

    <script src="../script/script-produto8.js"></script>
</body>

</html>