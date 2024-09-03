


<header class="header chasmishco_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-2 col-4">
                    <div class="logo">
                        <a href="index.html">
                            <img src="img/logo/logoVV2.png" alt="chasmishco Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-10 col-8 position-relative">
                    <div class="header_right_sidebar">
                        <div class="login_account">
                            <div class="account">
                                <ul>
                                    <?php if (!isset($_SESSION['logado']) || $_SESSION['logado'] == false): ?>

                                    <li><a href="/login">Log</a></li>
                                    <li><a href="/cadastro">Reg</a></li>

                                    <?php else: echo(sprintf("Olá, %s!", htmlspecialchars($_SESSION['nome']))); ?>   
                                    
                                    <li><form method="post" action="/deslogar"><button type="submit" name="sair">Sair</button></form></li>

                                    <?php endif ?>
                                    
                                </ul>
                            </div>
                            <div class="mini_cat_box">
                                <div class="shop_cart_icon shop_trigger shopping_basket header-cart">
                                    <img src="img/icons/icon.png" alt="icons">
                                    <span class="shop_count">3</span>
                                    <span class="cart_text"></span>
                                </div>
                            </div>
                        </div>
                        <div class="glass_toggle_menu">
                            <nav class="mainmenu_nav mainmenu__nav">
                                <ul class="main_menu">
                                    <li class="drop">
                                        <a href="/">início</a>
                                    </li>
                                    <li class="drop">
                                        <a href="/mostruario">Compras</a> 
                                    </li>
                                    <li>
                                        <a href="/sobre">Sobre</a>
                                    </li>
                                    <li class="drop">
                                        <a >Paginas</a>
                                        <ul class="dropdown">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/cadastro">cadastro</a></li>
                                            <li><a href="/login">login</a></li>
                                            <li><a href="/carrinho">carrinho</a></li>
                                            <li><a href="/deslogar">deslogar</a></li>
                                            <li><a href="/pagamento">pagamento</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/contato">Contato</a>
                                    </li>
                                </ul>
                            </nav>

                            <div class="hamburger-box button mobile-toggle">
                                <span class="mobile-toggle__icon"></span>
                            </div>
                        </div>

                        <div class="mobile-menu-toggle d-lg-none">
                            <button class="menu-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- Mobile Menu Start -->
    <div class="mobile-menu mobile-menu-items" >

        <div class="mobile-menu-close">
            <button class="close-toggle">
                <span></span>
                <span></span>
            </button>
        </div>

        <ul class="main_menu">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/shopping">Shop</a>
            </li>
      
            <li>
                <a href="/Sobre">Sobre</a>
            </li>
            <li>
                <a>Paginas</a>
                <ul class="dropdown">
                    <li><a href="/">Home</a></li>
                    <li><a href="/cadastro">cadastro</a></li>
                    <li><a href="/login">login</a></li>
                    <li><a href="/carrinho">carrinho</a></li>
                    <li><a href="/deslogar">deslogar</a></li>
                    <li><a href="/oculos">Oculos</a></li>
                </ul>
            </li>
            <li>
                <a href="/contatos">Contatos</a>
            </li>
        </ul>
    </div>
    <div class="menu-overlay"></div>
  
    
    <!-- Mini Cart Wrap Start -->
    <div class="mini-cart-wrap">

        <!-- Mini Cart Top -->
        <div class="mini-cart-top">
            <button class="close-cart">Fechar carrinho
                <i class="icofont icofont-close"></i>
            </button>
        </div>

        <!-- Mini Cart Products -->
        <ul class="mini-cart-products">
            <li>
                <a class="image">
                    <img src="img/product/product-1.jpg" alt="Product">
                </a>
                <div class="content">
                    <a href="single-product.html" class="title">Simple Silacon Glasses</a>
                    <span class="price">Price: $59</span>
                    <span class="qty">Qty: 01</span>
                </div>
                <button class="remove">
                    <i class="fa fa-trash-o"></i>
                </button>
            </li>
            <li>
                <a class="image">
                    <img src="img/product/product-2.jpg" alt="Product">
                </a>
                <div class="content">
                    <a href="single-product.html" class="title">Simple Easin Glasses</a>
                    <span class="price">Price: $20</span>
                    <span class="qty">Qty: 02</span>
                </div>
                <button class="remove">
                    <i class="fa fa-trash-o"></i>
                </button>
            </li>
            <li>
                <a class="image">
                    <img src="img/product/product-3.jpg" alt="Product">
                </a>
                <div class="content">
                    <a href="single-product.html" class="title">Simple Macrox Glasses</a>
                    <span class="price">Price: $320</span>
                    <span class="qty">Qty: 03</span>
                </div>
                <button class="remove">
                    <i class="fa fa-trash-o"></i>
                </button>
            </li>
        </ul>
        <!-- Mini Cart Bottom -->
        <div class="mini-cart-bottom">
            <h4 class="sub-total">Total:
                <span>$120</span>
            </h4>
            <div class="button">
                <a href="checkout.html">CHECKOUT</a>
            </div>
        </div>

    </div>
    <div class="body_overlay">rdgersgertgwe</div>
    <!--// Header -->   