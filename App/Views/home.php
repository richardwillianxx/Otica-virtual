<div id="wrapper" class="wrapper">
    
    <!-- Start Slider Area -->
    <div class="slider_area slide_active">

        <!-- Start Single Slide -->
        <div class="slide slide_fixed_height bg_image--1 d-flex align-items-center poss_relative animation__style01">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">

                        <div class="slide_text">
                            <h3>Preços baixos inacreditáveis</h3>
                            <h1>ÓCULOS DE SOL PARA
                                <br> HOMENS E MULHERES</h1>
                            <a href="/">Compre agora</a>
                        </div>

                        <div class="rotate_titlE">
                            <h2>GET UP TO
                                <span>65%</span> Off</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="slide slide_fixed_height bg_image--2 d-flex align-items-center poss_relative animation__style01">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">

                        <div class="slide_text">
                            <h3>Somente aqui na Virtual Vision</h3>
                            <h1>OS ÓCULOS IDEAIS PARA
                                <br> O SEU FILHO</h1>
                            <a href="#">Compre agora</a>
                        </div>

                        <div class="rotate_titlE">
                            <h2>GET UP TO
                                <span>65%</span> Off</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="slide slide_fixed_height bg_image--3 d-flex align-items-center poss_relative animation__style01">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">

                        <div class="slide_text">
                            <h3>Explore nossas ofertas e encontre o par que faz a diferença</h3>
                            <h1>Armações que 
                                <br> combinam com você</h1>
                            <a href="#">Compre agora</a>
                        </div>

                        <div class="rotate_titlE">
                            <h2>GET UP TO
                                <span>65%</span> Off</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->

    </div>
    <!-- End Slider Area -->

    <!-- Start Product Area -->
    <div class="product_area section-pt-xl section-pb-xl bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h2>ÚLTIMOS ÓCULOS</h2>
                        <p>Óculos de qualidade são essenciais para quem precisa enxergar com clareza e conforto em todas as situações do dia a dia</p>
                    </div>
                </div>
            </div>
            <div class="row mt--20">
                <!-- Start Single Product -->
                <?php  $contador = 0; foreach ($produtos as $produto): $contador += 1; if($contador > 4): ?>
                <div class="col-lg-3 col-xl-3 col-sm-6 col-12">
                    <div class="product">
                        <div class="thumb">
                            <a href="single-product.html">
                                <img src="<?= $produto->foto?>" alt="product img">
                            </a>
                            <div class="product_action">
                                <h4>
                                    <a href="single-product.html"><?= $produto->nome ?></a>
                                </h4>
                                <ul class="cart_action">
                                    <li>
                                        <a href="cart.html">
                                            <img src="img/icons/add_to_cart.png" alt="icons">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icons/compare_icon.png" alt="icons">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="img/icons/wishlist_icon.png" alt="icons">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Quick View" class="quickview" href="#">
                                            <img src="img/icons/quick_view.png" alt="icons">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="single-product.html"><?= $produto->nome ?></a>
                                </h4>
                                <ul class="price">
                                    <li>R$ <?= $produto->preco ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->

                <?php endif;  if ($contador == 8){ break; } endforeach; ?>
            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Banner Area -->
    <div class="banner_area">
        <div class="row g-1">

            <div class="col-lg-4 col-sm-6 col-12">
                <div class="banner">
                    <div class="thumb">
                        <a href="#">
                            <img src="img/banner/img1Promo.svg" alt="banner img">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <div class="banner">
                    <div class="thumb">
                        <a href="#">
                            <img src="img/banner/img2Promo.svg" alt="banner img">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <div class="banner">
                    <div class="thumb">
                        <a href="#">
                            <img src="img/banner/img3Promo.svg" alt="banner img">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start Product Area -->
    <div class="product_area section-pt-xl section-pb-xl bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h2>NOVOS ÓCULOS</h2>
                        <p>A visão perfeita é a chave para uma vida cheia de detalhes e nuances; escolha óculos que acompanhem cada momento com exatidão e estilo</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_tab_name justify-content-center nav" role="tablist">
                        <a class="active" href="#item1" data-bs-toggle="tab"> Todos</a>
                        <a href="#item2" data-bs-toggle="tab"> Masculinos</a>
                        <a href="#item3" data-bs-toggle="tab"> Femininos</a>
                    </div>
                </div>
            </div>
            <div class="tab_content">
                <!-- Start Single Content -->
                <div class="row single_content tab-pane fade show active" id="item1" role="tabpanel">
                    <?php foreach ($produtos as $produto): ?>
                        <!-- Start Single Product -->
                        <div class="col-lg-4 col-xl-3 col-sm-6 col-12">
                            <div class="product">
                                <div class="thumb">
                                    <a href="single-product.html">
                                        <img src="<?= $produto->foto ?>" alt="product img">
                                    </a>
                                    <div class="product_action">
                                        <h4>
                                            <a href="single-product.html"><?= $produto->nome ?></a>
                                        </h4>
                                        <ul class="cart_action">
                                            <li>
                                                <a href="/carrinho/adicionar/<?= $produto->id?>">
                                                    <img src="img/icons/add_to_cart.png" alt="icons">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="img/icons/compare_icon.png" alt="icons">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <img src="img/icons/wishlist_icon.png" alt="icons">
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Quick View" class="quickview" href="#">
                                                    <img src="img/icons/quick_view.png" alt="icons">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="single-product.html"><?= $produto->nome ?></a>
                                        </h4>
                                        <ul class="price">
                                            <li>R$ <?= $produto->preco ?></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                    <?php  endforeach; ?>
                </div>
                <!-- End Single Content -->
                <!-- Start Single Content -->
                <div class="row single_content tab-pane fade" id="item2" role="tabpanel">

                   <?php foreach ($produtos as $produtoM): if($produtoM->tipo == 2){?>
                    <!-- Start Single Product -->
                    <div class="col-lg-4 col-xl-3 col-sm-6 col-12">
                        <div class="product">
                            <div class="thumb">
                                <a href="single-product.html">
                                    <img src="<?= $produtoM->foto ?>" alt="product img">
                                </a>
                                <div class="product_action">
                                    <h4>
                                        <a href="single-product.html"><?= $produtoM->nome ?></a>
                                    </h4>
                                    <ul class="cart_action">
                                        <li>
                                            <a href="/carrinho/adicionar/<?= $produto->id?>">
                                                <img src="img/icons/add_to_cart.png" alt="icons">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="img/icons/compare_icon.png" alt="icons">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <img src="img/icons/wishlist_icon.png" alt="icons">
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Quick View" class="quickview" href="#">
                                                <img src="img/icons/quick_view.png" alt="icons">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="single-product.html"><?= $produtoM->nome ?></a>
                                    </h4>
                                    <ul class="price">
                                        <li>R$ <?= $produtoM->preco ?></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <?php }  endforeach; ?>
                </div>
                <!-- End Single Content -->
                <!-- Start Single Content -->
                <div class="row single_content tab-pane fade" id="item3" role="tabpanel">
                    <?php foreach ($produtos as $produtoF): if($produtoF->tipo == 1){?>
                        <!-- Start Single Product -->
                        <div class="col-lg-4 col-xl-3 col-sm-6 col-12">
                            <div class="product">
                                <div class="thumb">
                                    <a href="single-product.html">
                                        <img src="<?= $produtoF->foto ?>" alt="product img">
                                    </a>
                                    <div class="product_action">
                                        <h4>
                                            <a href="single-product.html"><?= $produtoF->nome ?></a>
                                        </h4>
                                        <ul class="cart_action">
                                            <li>
                                                <a href="/carrinho/adicionar/<?= $produto->id?>">
                                                    <img src="img/icons/add_to_cart.png" alt="icons">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="img/icons/compare_icon.png" alt="icons">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <img src="img/icons/wishlist_icon.png" alt="icons">
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Quick View" class="quickview" href="#">
                                                    <img src="img/icons/quick_view.png" alt="icons">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="single-product.html"><?= $produtoF->nome ?></a>
                                        </h4>
                                        <ul class="price">
                                            <li>R$ <?= $produtoF->preco ?></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                    <?php }  endforeach; ?>
                </div>
                <!-- End Single Content -->
            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start How To Work Area -->
    <div class="work_area bg-dark">
        <div class="row g-0 align-items-center">
            <div class="col-lg-12 col-12 col-xl-8">
                <div class="row working_wrapper">
                    <div class="col-lg-12 col-xl-4">
                        <div class="work_wrap">
                            <h3>It’s very simple & easy</h3>
                            <h2>BUY OUR PRODUCTS VERY SIMPLE WAY</h2>
                            <h4>GET
                                <span>PROMO CODE</span> HERE</h4>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-8">
                        <div class="work_process d-flex flex-wrap">

                            <div class="work w-50">
                                <h3>01. Search your chasmish</h3>
                                <p>Eye chasmish are very important for thos whos have some difficult </p>
                            </div>

                            <div class="work w-50">
                                <h3>02. Customize you chasmish</h3>
                                <p>Eye chasmish are very important for thos whos have some difficult </p>
                            </div>

                            <div class="work w-50">
                                <h3>03. Quickly checkout</h3>
                                <p>Eye chasmish are very important for thos whos have some difficult </p>
                            </div>

                            <div class="work w-50">
                                <h3>04. Receive your chasmish</h3>
                                <p>Eye chasmish are very important for thos whos have some difficult </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="banner">
                    <div class="thumb">
                        <a href="#">
                            <img src="img/banner/banner-4.jpg" alt="banner img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End How To Work Area -->

    <!-- Start CounteUp Area -->
    <div class="counterup_area section-pt-xl">
        <div class="counterup_wrapper">
            <div class="container bg_image--4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="counter_content_inner">
                            <div class="counter_content">
                                <div class="thumb">
                                    <img src="img/product/imgOculosMancha.png" alt="banner images">
                                </div>
                                <div class="content">
                                    <h2>It’s WODIS</h2>
                                    <h3>STYLISH & BEAUTY
                                        <br>chasmish</h3>
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CounteUp Area -->

    <!-- Start Product Area -->
    <div class="product_area section-pt-xl section-pb-xl bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h2>TODOS OS ÓCULOS EM DESTAQUE</h2>
                        <p>Investir em lentes e óculos de qualidade é investir em uma visão mais nítida e confortável, essencial para a sua qualidade de vida</p>
                    </div>
                </div>
            </div>
            <div class="row mt--20">
                <!-- Start Single Product -->

                <?php  $contador = 0; foreach ($produtos as $produto): $contador += 1;  ?>

                <div class="col-lg-3 col-xl-3 col-sm-6 col-12">
                    <div class="product">
                        <div class="thumb">
                            <a href="single-product.html">
                                <img src="<?= $produto->foto?>" alt="product img">
                            </a>
                            <div class="product_action">
                                <h4>
                                    <a href="single-product.html"><?= $produto->nome ?></a>
                                </h4>
                                <ul class="cart_action">
                                    <li>
                                        <a href="cart.html">
                                            <img src="img/icons/add_to_cart.png" alt="icons">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icons/compare_icon.png" alt="icons">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="img/icons/wishlist_icon.png" alt="icons">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Quick View" class="quickview" href="#">
                                            <img src="img/icons/quick_view.png" alt="icons">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="single-product.html"><?= $produto->nome ?></a>
                                </h4>
                                <ul class="price">
                                    <li>R$ <?= $produto->preco ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->

                <?php if ($contador == 4){ break; } endforeach; ?>

            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Shipping Service -->
    <div class="shipping_service bg_image--4 ptb--90">
        <div class="shipping_wrap">
            <div class="row">

               
                <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                    <div class="service item_1">
                        <div class="icon">
                            <img src="img/icons/ship_icon_1.png" alt="icon">
                        </div>
                        <div class="content">
                            <h3>Entrega gratuita em domicílio</h3>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                    <div class="service item_2">
                        <div class="icon">
                            <img src="img/icons/ship_icon_2.png" alt="icon">
                        </div>
                        <div class="content">
                            <h3>Produtos de Qualidade</h3>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                    <div class="service item_3">
                        <div class="icon">
                            <img src="img/icons/ship_icon_3.png" alt="icon">
                        </div>
                        <div class="content">
                            <h3>Vale-Presente</h3>
                        </div>
                    </div>
                </div>
               
                
                <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                    <div class="service item_4">
                        <div class="icon">
                            <img src="img/icons/ship_icon_4.png" alt="icon">
                        </div>
                        <div class="content">
                            <h3>Retorno fácil em 3 dias</h3>
                        </div>
                    </div>
                </div>
               

            </div>
        </div>
    </div>

