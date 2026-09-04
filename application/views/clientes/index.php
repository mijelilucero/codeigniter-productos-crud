<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Clientes</h1>
    <a href="<?= site_url('clientes/crear') ?>" class="btn btn-primary">Nuevo cliente</a>
</div>

<?php if ($this->session->flashdata('mensaje')): ?>
    <div class="alert alert-success"><?= $this->session->flashdata('mensaje') ?></div>
<?php endif; ?>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>DPI</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($clientes)): ?>
                    <tr>
                        <td colspan="7" class="text-center">No hay clientes registrados todavía.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($clientes as $cliente): ?>
                        <tr>
                            <td><?= $cliente->id ?></td>
                            <td><?= html_escape($cliente->nombres) ?></td>
                            <td><?= html_escape($cliente->apellidos) ?></td>
                            <td><?= html_escape($cliente->dpi) ?></td>
                            <td><?= html_escape($cliente->telefono) ?></td>
                            <td><?= html_escape($cliente->direccion) ?></td>
                            <td>
                                <a href="<?= site_url('clientes/editar/' . $cliente->id) ?>" class="btn btn-sm btn-outline-secondary">Editar</a>
                                <a href="<?= site_url('clientes/eliminar/' . $cliente->id) ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('¿Eliminar este cliente?')">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>