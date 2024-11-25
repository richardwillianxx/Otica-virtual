<?php

use App\Models\Estoque;
use App\Models\Produto;
use App\Widgets\BaseWidget;

/**
 * @var Produto $produto
 */

?>

   <!-- Start Single Product -->
   <div class="gm_single_product pt--100 pb--100 bg--white">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="product__details__container">
                            <div class="tab_container big_img_container">
                                <div class="big_img tab-pane fade show active" id="img1" role="tabpanel">
                                    <img src="<?= $produto->foto ?>" alt="gomes restaurant">
                                </div>

                                <div class="big_img tab-pane fade" id="img2" role="tabpanel">
                                    <img src="img/product/big-img-2.png" alt="gomes restaurant">
                                </div>
                                <div class="big_img tab-pane fade" id="img3" role="tabpanel">
                                    <img src="img/product/big-img-3.png" alt="gomes restaurant">
                                </div>
                                <div class="big_img tab-pane fade" id="img4" role="tabpanel">
                                    <img src="img/product/big-img.png" alt="gomes restaurant">
                                </div>
                                <div class="big_img tab-pane fade" id="img5" role="tabpanel">
                                    <img src="img/product/big-img-2.png" alt="gomes restaurant">
                                </div>
                            </div>
                            <div class="sm_roduct_nav nav nav-tabs" role="tablist">
                                <!--
                                      <a class="active" id="img1-tab" data-bs-toggle="tab" href="#img1" role="tab" aria-controls="img1" aria-selected="true">
                                          <img src="img/product/sm1.png" alt="gomes restaurant">
                                      </a>
                                      <a id="nav-img2-tab" data-bs-toggle="tab" href="#img2" role="tab" aria-controls="img2" aria-selected="false">
                                          <img src="img/product/sm2.png" alt="gomes restaurant">
                                      </a>
                                      <a id="nav-img3-tab" data-bs-toggle="tab" href="#img3" role="tab" aria-controls="img3" aria-selected="false">
                                          <img src="img/product/sm3.png" alt="gomes restaurant">
                                      </a>
                                      <a id="nav-img4-tab" data-bs-toggle="tab" href="#img4" role="tab" aria-controls="img4" aria-selected="false">
                                          <img src="img/product/sm1.png" alt="gomes restaurant">
                                      </a>
                                      <a id="nav-img5-tab" data-bs-toggle="tab" href="#img5" role="tab" aria-controls="img5" aria-selected="false">
                                          <img src="img/product/sm2.png" alt="gomes restaurant">
                                      </a>
                                 -->
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="single_product_inner">
                            <h4><?= $produto->nome ?></h4>

                            <div class="price">
                                <span class="new">R$<?= $produto->preco ?></span>

                            </div>

                            <ul class="rating">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="off">
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>

                            <div class="pro_dtl">
                                <p>Produtos avaliados na loja
                                    <br>Disponíveis:
                                    <span class="heading-color"><?= $produto->estoque->quantidade ?? "0" ?></span> itens.</p>
                                <p><?= $produto->descricao ?></p>
                            </div>
                            
                            <div class="product_cart_action">
                                <div class="add_to_cart">
                                    <ul class="cart_list">
                                        <li class="shopping_basket">
                                            <a href="cart.html">
                                                <i class="fa fa-shopping-basket"></i> Adicionar ao carrinho</a>
                                        </li>
                                        <li>
                                            <a href="curtir/<?= $produto->id ?>">

                                               <?php if($produto->curtido == "1"): ?>
                                                   <i class="fa fa-heart-o text-danger"></i>
                                               <?php else: ?>
                                                   <i class="fa fa-heart-o"></i>
                                               <?php endif ?>

                                            </a>

                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="cart_qun_inner">
                                    <div class="pro-quantity"><div class="pro-qty"><input type="text" value="99"></div></div>
                                </div>
                            </div>
                            <div>
                            <button class="experimente" onclick="window.location.href='provador'">
                                <img src="../../img/camera.png" class="camera" alt="Câmera">
                                Experimentar
                            </button>
                            </div>
                            <div class="product_share">
                                <span>Compartilhar:</span>
                                <ul class="social_share">
                                    <li>
                                        <a class="facebook" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="google-plus" href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rss" href="#">
                                            <i class="fa fa-rss"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_review">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="description_nav nav nav-tabs d-block" role="tablist">
                                <a class="active" id="descrip-tab" data-bs-toggle="tab" href="#descrip" role="tab" aria-controls="descrip" aria-selected="true">Descrição do produto </a>
                                <a id="nav-review" data-bs-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Avaliações </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab_container">
                        <div class="single_review_content tab-pane fade show active" id="descrip" role="tabpanel">
                            <div class="content">
                                <p><?= $produto->descricao?></p>
                            </div>
                        </div>
                        <div class="single_review_content tab-pane fade" id="review" role="tabpanel">
                            <div class="classs__review__inner">
                                <h4>Adicionar um feedback</h4>
                                <p>Seus email não vai ser publicado.</p>
                                <span>Avaliação :</span>
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <form action="#">
                                    <div class="input__box">
                                        <span>Comentário</span>
                                        <textarea name="message"></textarea>
                                    </div>
                                    <div class="input__box">
                                        <span>Nome</span>
                                        <input type="text">
                                    </div>
                                    <div class="input__box">
                                        <span>E-mail</span>
                                        <input type="email">
                                    </div>
                                    <div class="submit__btn">
                                        <a href="#">Enviar</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product -->