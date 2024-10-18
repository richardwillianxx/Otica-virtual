<?php

use App\Models\Produto;
$produtos = Produto::all();

?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col align-self-left pt-1">
                    <h4>Listagem de Produtos</h4>
                </div>
                <div class="col align-self-right text-right">
                    <a class="btn btn-primary" href="/produtos/cadastro"><i class="fa fa-plus-circle"></i> Novo Produto</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>preco</th>
                    <th>categoria</th>
                    <th>Tipo</th>
                    <th>foto</th>
                    <th>Data de Entrada</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= htmlspecialchars($produto->id) ?></td>
                        <td><?= htmlspecialchars($produto->nome) ?></td>
                        <td><?= htmlspecialchars($produto->preco) ?></td>
                        <td><?= htmlspecialchars($produto->categoria) ?></td>
                        <td><?= htmlspecialchars($produto->tipo) ?></td>
                        <td><img class="fotos-produtos" src="<?= $produto->foto ?>"></td>
                        <td><?= $produto->getCreatedAtFormatado(true) ?></td>
                        <td>
                            <a class="btn btn-info btn-sm" href="/produtos/editar/<?= $produto->id ?>"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm"href="/produtos/remover/<?= $produto->id ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


