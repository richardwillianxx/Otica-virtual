

<?php

use App\Models\Produto;
$produtos = Produto::all();

?>

<div id="produtos-container" class="container mt-4">
    <div id="produtos-card" class="card">
        <div id="produtos-card-header" class="card-header">
            <div id="produtos-row" class="row">
                <div class="col align-self-start pt-1">
                    <h4>Listagem de Produtos</h4>
                </div>
                <div class="col-auto ml-auto">
                    <a id="produtos-btn" class="btn btn-primary" href="/produtos/cadastro"><i class="fa fa-plus-circle"></i> Novo Produto</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table id="produtosTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Tipo</th>
                    <th>Foto</th>
                    <th>Data de Entrada</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td data-label="#"> <?= htmlspecialchars($produto->id) ?> </td>
                        <td data-label="Nome"> <?= htmlspecialchars($produto->nome) ?> </td>
                        <td data-label="Preço"> <?= htmlspecialchars($produto->preco) ?> </td>
                        <td data-label="Categoria"> <?= htmlspecialchars($produto->categoria) ?> </td>
                        <td data-label="Tipo"> <?= htmlspecialchars($produto->tipo) ?> </td>
                        <td data-label="Foto">
                            <img class="fotos-produtos" src="<?= htmlspecialchars($produto->foto) ?>">
                        </td>
                        <td data-label="Data de Entrada"> <?= htmlspecialchars($produto->getCreatedAtFormatado(true)) ?> </td>
                        <td data-label="Ações">
                            <a class="btn btn-info btn-sm" href="/produtos/editar/<?= $produto->id ?>"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm" href="/produtos/remover/<?= $produto->id ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>

            </table>
        </div>
    </div>
</div>