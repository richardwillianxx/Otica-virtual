   
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
                    <a href="index.html">Home</a>
                    <ul class="dropdown">
                        <li>
                            <a href="index.html">Home Version 01</a>
                        </li>
                        <li>
                            <a href="index-2.html">Home Version 02</a>
                        </li>
                        <li>
                            <a href="index-3.html">Home Version 03</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="shop-grid.html">Shop</a>
                    <ul class="dropdown">
                        <li><a href="shop-grid.html">Shop Grid</a></li>
                        <li><a href="shop-list.html">Shop List</a></li>
                        <li><a href="single-product.html">Shop Single</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog-three-column.html">Blog</a>
                    <ul class="dropdown">
                        <li><a href="blog-three-column.html">Blog Three Column</a></li>
                        <li><a href="blog-two-column.html">Blog Two Column</a></li>
                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="#">pages</a>
                    <ul class="dropdown">
                        <li><a href="cart.html">Cart Page</a></li>
                        <li><a href="compare.html">Compare Page</a></li>
                        <li><a href="wishlist.html">Wishlist Page</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="checkout.html">Checkout Page</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <div class="menu-overlay"></div>
        <!-- Mobile Menu End -->

        <!-- Mini Cart Wrap Start -->
        <div class="mini-cart-wrap">

            <!-- Mini Cart Top -->
            <div class="mini-cart-top">
                <button class="close-cart">Close Cart
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
        <!-- Mini Cart Wrap End -->

        <!-- Cart Overlay -->
        <div class="body_overlay"></div>

        <!-- Start Contact Area -->
        <div class="contact_area section-ptb-xl">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="gogle_map">
                            <div id="googleMap">

                                <div id="map">
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSr8SFxD03BRdriVAXeemLLaB1iop7Tmk"></script>

                                    <script>
                                        function initMap() {
                                            var location = {
                                                lat: -22.7580828,
                                                lng: -47.3831891
                                            };
                                            var map = new google.maps.Map(document.getElementById('map'), {
                                                zoom: 15,
                                                center: location
                                            });

                                            var marker = new google.maps.Marker({
                                                position: location,
                                                map: map
                                            });
                                        }
                                        window.onload = initMap;
                                    </script>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt--120 pt--121">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="contact_adress">
                            <div class="ct_address">
                                <h3 class="ct_title">Localização & Informações:</h3>
                                <p></p>
                            </div>

                            <div class="address_wrapper">

                                <div class="address">
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Endereço:</span>  R. Ver. Sérgio Leopoldino Alves, 500 - Distrito Industrial I <br>  Santa Bárbara d'Oeste - SP</p>
                                    </div>
                                </div>

                                <div class="address">
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Email: </span> virtualvision@gmail.com </p>
                                    </div>
                                </div>

                                <div class="address">
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Telefone:</span> (19) 99347-5896 </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 sm-mt--30">

                        <div class="contact_form">
                            <h3 class="ct_title">Entre em contato conosco</h3>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="text" name="name" placeholder="Nome">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="text" name="subject" placeholder="Assunto">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="text" name="phone" id="phone" maxlength="15" placeholder="Número de telefone">
                                            <script>
                                                const telefoneInput = document.getElementById('phone');
                                                    telefoneInput.addEventListener('input', () => {
                                                    const telefone = telefoneInput.value.replace(/\D/g, '');
                                                    telefoneInput.value = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
                                                });                             
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input_box">
                                            <textarea name="message" placeholder="Mensagem"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit">Enviar mensagem</button>
                                    </div>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->
