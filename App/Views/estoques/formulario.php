<?php

use App\Models\Estoque;
use App\Models\Produto;

/**
 * @var Estoque|null $estoque
 * @var Produto[] $produtos
 */

?>

<div id="editar-estoque-container" class="container mt-4">
    <div id="editar-estoque-card" class="card">
        <div id="editar-estoque-card-header" class="card-header">
            <h4><?= $estoque?->id ? "Editar Estoque" : "Novo Estoque" ?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= $estoque?->id ? '/estoques/salvar/' . $estoque->id : '/estoques/salvar' ?>">
                <div class="row">
                    <!-- Campo Produto -->
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label for="produto_id" class="form-label">Produto</label>
                        <select id="produto_id" name="produto_id" class="form-control" required>
                            <?php if (!$estoque): ?>
                                <option value="">Selecione um produto...</option>
                                <?php foreach ($produtos as $produto): ?>
                                    <option value="<?= $produto->id ?>"><?= htmlspecialchars($produto->nome) ?></option>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <option value="<?= $estoque->produto->id ?>" selected><?= htmlspecialchars($estoque->produto->nome) ?></option>
                            <?php endif; ?>
                        </select>
                    </div>

                    <!-- Campo Quantidade -->
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label for="quantidade" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="quantidade" name="quantidade"
                               step="1" min="1" value="<?= htmlspecialchars($estoque?->quantidade ?? '') ?>" required>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary" id="salvar-estoque-btn">
                        <?= $estoque?->id ? "Salvar Alterações" : "Salvar" ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>