<?php

use App\Models\Usuario;
$clientes = Usuario::all();

?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col align-self-left pt-1">
                    <h4>Listagem de Clientes</h4>
                </div>
                <div class="col align-self-right text-right">
                    <a class="btn btn-primary" href="/clientes/cadastro"><i class="fa fa-plus-circle"></i> Novo Cliente</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>email</th>
                    <th>telefone</th>
                    <th>cpf</th>
                    <th>Usuario</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= htmlspecialchars($cliente->id) ?></td>
                        <td><?= htmlspecialchars($cliente->nome) ?></td>
                        <td><?= htmlspecialchars($cliente->email) ?></td>
                        <td><?= htmlspecialchars($cliente->telefone) ?></td>
                        <td><?= htmlspecialchars($cliente->cpf) ?></td>
                        <td><?= htmlspecialchars($cliente->usuario)  ?></td>
                        <td>
                            <a class="btn btn-info btn-sm" href="/clientes/editar/<?= $cliente->id ?>"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm"href="/clientes/remover/<?= $cliente->id ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


