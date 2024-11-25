<?php

use App\Models\Produto;

$produtos = Produto::all();

$items = [];
$carrinho = [];



?>
<!-- Cart Page Start -->
<div class="wishlist_area pt--120 pb--120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="cart-table table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="pro-thumbnail">Imagem</th>
                                <th class="pro-title">Produto</th>
                                <th class="pro-price">Preço</th>
                                <th class="pro-quantity">Quantidade</th>
                                <th class="pro-subtotal">Total</th>
                                <th class="pro-remove">Remover</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($_SESSION['carrinho'] as $idProduto => $item):
                                $total = $item['preco'] * $item['quantidade'];
                                ?>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="<?= $item['foto'] ?>" alt="Product"></a></td>
                                    <td class="pro-title"><a href="#"><?= htmlspecialchars($item['nome']); ?></a></td>
                                    <td class="pro-price"><span>R$<?= number_format($item['preco'], 2); ?></span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty">
                                            <input type="number" value="<?= $item['quantidade']; ?>" min="0">
                                        </div>
                                    </td>
                                    <td class="pro-price"><span id="total-produto-<?= $idProduto; ?>">R$<?= number_format($total, 2, ',', '.'); ?></span></td>
                                    <td class="pro-remove"><a href="/carrinho/remover/<?= $item['id'] ?>"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="5">Total do Carrinho</td>
                                <td id="total-carrinho">R$<?= number_format($_SESSION['total_carrinho'] ?? 0, 2, ',', '.'); ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- Cart Page End -->




