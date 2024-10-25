

<?php

use App\Models\Usuario;
$clientes = Usuario::all();

?>

<div id="clientes-container" class="container mt-4">
    <div id="clientes-card" class="card">
        <div id="clientes-card-header" class="card-header">
            <div id="clientes-row" class="row">
                <div class="col align-self-start pt-1">
                    <h4>Listagem de Clientes</h4>
                </div>
                <div class="col-auto ml-auto">
                    <a id="clientes-btn" class="btn btn-primary" href="/clientes/cadastro"><i class="fa fa-plus-circle"></i> Novo Cliente</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table id="clientesTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>Usuário</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td data-label="#"> <?= htmlspecialchars($cliente->id) ?> </td>
                        <td data-label="Nome"> <?= htmlspecialchars($cliente->nome) ?> </td>
                        <td data-label="Email"> <?= htmlspecialchars($cliente->email) ?> </td>
                        <td data-label="Telefone"> <?= htmlspecialchars($cliente->telefone) ?> </td>
                        <td data-label="CPF"> <?= htmlspecialchars($cliente->cpf) ?> </td>
                        <td data-label="Usuário"> <?= htmlspecialchars($cliente->usuario) ?> </td>
                        <td data-label="Ações">
                            <a class="btn btn-info btn-sm" href="/clientes/editar/<?= $cliente->id ?>"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm" href="/clientes/remover/<?= $cliente->id ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
