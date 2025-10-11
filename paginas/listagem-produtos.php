<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Grilo Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../estilo/style-listagem.css">
    <link rel="icon" href="../imagem-grilo/grilo.png" type="image/x-icon">
</head>
<body>

    <header>
        <div class="top-bar">
            <div class="top-bar-content">
                <div class="left-text">
                    <p>Entrega rápida para todo o Brasil!</p>
                </div>
                <div class="right-text">
                    <p>Fale Conosco <i class="fas fa-phone"></i></p>
                </div>
            </div>
        </div>
        <nav class="navbar">
            <div class="nav-container">
                <div class="grilo-logo">
                        <img src="../imagem-grilo/grilo.png"> Grillo Store
                    </div>
                <a href="Principal.php" class="btn btn-secondary"> Voltar </a>

                <div class="search-bar">
                    <input type="text" placeholder="Pesquisar produtos..." id="searchInput">
                    <i class="fas fa-search"></i>
                </div>

                <ul class="nav-links">
                    <<?php if(isset($_SESSION['usuario_nome'])): ?>
                   <li><a href="#"><i class="fas fa-user"></i> Olá, <?= $_SESSION['usuario_nome']; ?></a></li>
                   <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                   <?php else: ?>
                   <li><a href="#" rel="account"><i class="fas fa-user"></i> Minha Conta</a></li>
                   <li><a href="cadastro.php" class="btn btn-primary">Cadastro</a></li>
                   <li><a href="login.php" class="btn btn-secondary" id="login-btn">Login</a></li>
                   <?php endif; ?>
                   <li class="cart-link"><a href="#"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
                   <li class="cep-link"><a href="#" id="header-cep-btn"><i class="fas fa-map-marker-alt"></i> Inserir CEP</a></li>
                   </ul>
                    <li class="darkmode-container">
                        <button id="darkModeToggle" class="btn-dark-mode">
                             </button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="product-listing">
            <div class="product-listing-header">
                <h2>Todos os Produtos</h2>
                <p>Confira nossa seleção de produtos de alta qualidade.</p>
            </div>
            
            <div class="product-grid" id="productGrid">
                <a href="produto-1-camiseta-basica.php" class="product-card-link" data-id="1">
                    <div class="product-card" data-category="moda">
                        <span class="product-badge">NOVO</span>
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/camisa1.jpg" alt="Camisa base Masculina " class="product-image">
                        <div class="product-info">
                            <p class="product-category">Moda</p>
                            <h3 class="product-title">Kit Camiseta Básica Masculina</h3>

                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(4.0)</span>
                            </div>
                            <p class="product-price">R$ 47,49<span class="old-price">R$ 25,00 </span></p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>

                <a href="produto-2-camisetas-femininas.php" class="product-card-link" data-id="2">
                    <div class="product-card" data-category="moda">
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/camisa1fem.jpg" alt="Camisas Femininas" class="product-image">
                        <div class="product-info">
                            <p class="product-category">Moda</p>
                            <h3 class="product-title">Kit 4 Camisetas Feminina de Academia- Atacado</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5.0)</span>
                            </div>
                            <p class="product-price">R$ 53,99</p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>
                
                <a href="produto-3-notebook.php" class="product-card-link" data-id="3">
                    <div class="product-card" data-category="Tecnologia">
                        <span class="product-badge">OFERTA</span>
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/note2.jpg" alt="Notebook" class="product-image">
                        <div class="product-info">
                            <p class="product-category">Eletrônicos</p>
                            <h3 class="product-title">Notebook Acer Aspire Go</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(4.5)</span>
                            </div>
                            <p class="product-price">R$ 2.890,00 <span class="old-price">No cartão 10x de 321,11</span></p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>

                <a href="produto-4-impressora.php" class="product-card-link" data-id="4">
                    <div class="product-card" data-category="Eletrônicos">
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/Impre1.jpg" alt="Impressora" class="product-image">
                        <div class="product-info">
                            <p class="product-category">Eletrônico</p>
                            <h3 class="product-title">Impressora Multifuncional HP Smart Tank</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5.0)</span>
                            </div>
                            <p class="product-price">R$ 730,00</p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>
                
                <a href="Produto-5-polaroide.php" class="product-card-link" data-id="5">
                    <div class="product-card" data-category="Fotografia">
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/pola1.jpg" alt="Polaroid" class="product-image">
                        <div class="product-info">
                            <p class="product-category">Eletrônico</p>
                            <h3 class="product-title">Câmera instantânea Fujifilm Instax Kit Mini 12 + 10 fotos lilac purple</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(4.2)</span>
                            </div>
                            <p class="product-price">R$ 1,200,00</p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>

                <a href="produto-6-camera.php" class="product-card-link" data-id="6">
                    <div class="product-card" data-category="Fotografia">
                        <span class="product-badge">OFERTA</span>
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/camera1.jpg" alt="Camera" class="product-image">
                        <div class="product-info">
                            <p class="product-category">Eletrônico</p>
                            <h3 class="product-title">Câmera Fotográfica Digital Profissional A6x G Zoom Cor Preto EZSEP487</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(4.8)</span>
                            </div>
                            <p class="product-price">R$ 2.999,00 <span class="old-price">R$ 2.500,00</span></p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>
                
                <a href="produto7-macacao-eletrico.php" class="product-card-link" data-id="7">
                    <div class="product-card" data-category="Automotivo">
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/macaco5.jpg" alt="Produto 7" class="product-image">
                        <div class="product-info">
                            <p class="product-category">ferramentas</p>
                            <h3 class="product-title">Macaco Elétrico Toneladas com 12v e 100w Controle Carro</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(4.1)</span>
                            </div>
                            <p class="product-price">R$ 189,00</p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>

                <a href="produto-8-chupeta.php" class="product-card-link" data-id="8">
                    <div class="product-card" data-category="Automotivo">
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/chu1.jpg" alt="produto " class="product-image">
                        <div class="product-info">
                            <p class="product-category">Automotivo</p>
                            <h3 class="product-title">Cabo de Carga para Bateria Chupeta 3,5M Famastil </h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5.0)</span>
                            </div>
                            <p class="product-price">R$ 145,00</p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>
                
                <a href="produto-9-kit-jardinagem.php" class="product-card-link" data-id="9">
                    <div class="product-card" data-category="Casa e Jardim">
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/maleta .jpg" alt="Produto " class="product-image">
                        <div class="product-info">
                            <p class="product-category">Casa e Jardim</p>
                            <h3 class="product-title">Kit De Jardinagem 10 Peças + Maleta</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(3.8)</span>
                            </div>
                            <p class="product-price">R$ 155,52</p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>

                <a href="produto-10-mangueira.php" class="product-card-link" data-id="10">
                    <div class="product-card" data-category="Casa e Jardim">
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/mangueira_1.jpg" alt="Produto " class="product-image">
                        <div class="product-info">
                            <p class="product-category">Casa e Jardim</p>
                            <h3 class="product-title">Mangueira Flexível Tramontina 15m Flex</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(4.5)</span>
                            </div>
                            <p class="product-price">R$ 60,79</p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>

                <a href="produto-11-fone-de-ouvido.php" class="product-card-link" data-id="11">
                    <div class="product-card" data-category="Aúdio">
                        <span class="product-badge">OFERTA</span>
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/fone1.jpg " alt="Produto " class="product-image">
                        <div class="product-info">
                            <p class="product-category">Aúdio</p>
                            <h3 class="product-title">Headset Gamer Evolut EG307 </h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5.0)</span>
                            </div>
                            <p class="product-price">R$ 46,99</p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>

                <a href="produto-12-caixa-de-som.php" class="product-card-link" data-id="12">
                    <div class="product-card" data-category="Aúdio">
                        <span class="product-badge">NOVO</span>
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/caixa1.jpg" alt="Produto " class="product-image">
                        <div class="product-info">
                            <p class="product-category">Eletrônicos</p>
                            <h3 class="product-title">Caixa de Som Amplificada Portátil</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(4.8)</span>
                            </div>
                            <p class="product-price">R$ 110,00</p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>

                <a href="produto-13-sofa.php" class="product-card-link" data-id="13">
                    <div class="product-card" data-category="Casa e jardim">
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/sofa1.jpg" alt="Produto " class="product-image">
                        <div class="product-info">
                            <p class="product-category">Esportes</p>
                            <h3 class="product-title">Sofá Cama Colchão Casal Compactair</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(3.9)</span>
                            </div>
                            <p class="product-price">R$ 1851,35</p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>
                
                <a href="produto-14-mesa.php" class="product-card-link" data-id="14">
                    <div class="product-card" data-category="Casa e Jardim">
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/mesa1.jpg" alt="Produto " class="product-image">
                        <div class="product-info">
                            <p class="product-category">Casa e Jardim</p>
                            <h3 class="product-title">Conjunto Sala de Jantar Cel Móveis</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5.0)</span>
                            </div>
                            <p class="product-price">R$ 2632,48 </p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>

                <a href="produto-15-game.php" class="product-card-link" data-id="15">
                    <div class="product-card" data-category="games">
                        <span class="product-badge">OFERTA</span>
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/game2.jpg" alt="Produto " class="product-image">
                        <div class="product-info">
                            <p class="product-category">Games</p>
                            <h3 class="product-title">Sony PlayStation 4 Pro 1TB Standard </h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(4.2)</span>
                            </div>
                            <p class="product-price">R$ 2.499,00 </p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>

                   <a href="produto-16-xbox.php" class="product-card-link" data-id="16">
                    <div class="product-card" data-category="games">
                        <span class="product-badge">OFERTA</span>
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                        <img src="../imagens-produtos/box1.jpg" alt="Produto " class="product-image">
                        <div class="product-info">
                            <p class="product-category">Games</p>
                            <h3 class="product-title">Microsoft Xbox 360 Super Slim 250GB</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(4.2)</span>
                            </div>
                            <p class="product-price">R$ 1190,00 </p>
                            <button class="btn-add-to-cart">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="footer-content">
            <div class="footer-column">
                <a href="#" class="logo">Grilo Store</a>
                <p>A loja online completa para suas necessidades. Encontre produtos de alta qualidade com os melhores preços do mercado.</p>
                <div class="social-icons">
                    
                    
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>

                </div>
            </div>
            <div class="footer-column">
                <h3>Atendimento ao Cliente</h3>
                <ul>
                    <li><a href="#">Central de Ajuda</a></li>
                    <li><a href="#">Política de Devolução</a></li>
                    <li><a href="#">Rastrear Pedido</a></li>
                    <li><a href="#">Envio e Entrega</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Sobre a Grilo Store</h3>
                <ul>
                    <li><a href="#">Nossa História</a></li>
                    <li><a href="#">Carreiras</a></li>
                    <li><a href="#">Termos de Serviço</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Pagamento</h3>
                <p>Aceitamos todas as principais bandeiras de cartão de crédito e débito, além de Pix e boleto bancário.</p>
            </div>
        </div>
    </footer>

    <div class="bottom-right-icon">
        <i class="fas fa-question-circle"></i>
    </div>
    
    <div id="cep-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeCepModal">&times;</span>
            <div class="modal-header">
                <h2>Verificar Entrega</h2>
            </div>
            
                    <button type="submit" class="btn btn-primary" id="checkCepBtn">Verificar</button>
                </form>
            </div>
        </div>
    </div>

    <div id="cart-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeCartModal">&times;</span>
            <div class="modal-header">
                <h2>Seu Carrinho</h2>
            </div>
            <div class="modal-body">
                <div id="cart-items" class="cart-items-list">
                    <p class="empty-cart-message">Seu carrinho está vazio.</p>
                </div>
                <div class="cart-total-info">
                    <p>Total: <span id="cart-total">R$ 0,00</span></p>
                </div>
                <button class="btn btn-primary btn-checkout">Finalizar Compra</button>
            </div>
        </div>
    </div>

    <div id="login-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeLoginModal">&times;</span>
            <div class="modal-header">
                <h2>Entrar na Conta</h2>
            </div>
            <div class="modal-body">
                <p>Faça login para ter acesso a mais funcionalidades!</p>
                <form id="login-form">
                    <div class="form-group">
                        <label for="email">E-mail ou Usuário</label>
                        <input type="text" id="email" placeholder="Digite seu e-mail ou usuário">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" placeholder="Digite sua senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <p class="modal-link">Não tem conta? <a href="#">Crie uma aqui!</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="../script/script-listagem.js"></script>

</body>
</html>