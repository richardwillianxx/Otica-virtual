

<?php

use App\Models\Estoque;

/**
 * @var Estoque[] $estoques
 */

?>

<div id="estoque-container" class="container mt-4">
    <div id="estoque-card" class="card">
        <div id="estoque-card-header" class="card-header">
            <div id="estoque-row" class="row">
                <div class="col align-self-start pt-1">
                    <h4>Listagem de Estoque</h4>
                </div>
                <div class="col-auto ml-auto">
                    <a id="estoque-btn" class="btn btn-primary" href="/estoques/cadastro"><i class="fa fa-plus-circle"></i> Novo Estoque</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table id="estoqueTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($estoques as $estoque): ?>
                    <tr>
                        <td data-label="#"> <?= htmlspecialchars($estoque->id) ?> </td>
                        <td data-label="Produto"> <?= htmlspecialchars($estoque->produto->nome) ?> </td>
                        <td data-label="Quantidade"> <?= htmlspecialchars($estoque->quantidade) ?> </td>
                        <td data-label="Ações">
                            <a class="btn btn-info btn-sm" href="/estoques/editar/<?= $estoque->id ?>"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm" href="/estoques/remover/<?= $estoque->id ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
