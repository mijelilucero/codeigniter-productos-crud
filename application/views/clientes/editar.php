<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h1 class="mb-4">Editar cliente</h1>

<?= validation_errors('<div class="alert alert-danger">', '</div>') ?>

<div class="card">
    <div class="card-body">
        <?= form_open('clientes/editar/' . $cliente->id) ?>
            <div class="mb-3">
                <label class="form-label">Nombres</label>
                <?= form_input(['name' => 'nombres', 'class' => 'form-control', 'value' => set_value('nombres', $cliente->nombres)]) ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <?= form_input(['name' => 'apellidos', 'class' => 'form-control', 'value' => set_value('apellidos', $cliente->apellidos)]) ?>
            </div>
            <div class="mb-3">
                <label class="form-label">DPI</label>
                <?= form_input(['name' => 'dpi', 'class' => 'form-control', 'value' => set_value('dpi', $cliente->dpi)]) ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <?= form_input(['name' => 'telefono', 'class' => 'form-control', 'value' => set_value('telefono', $cliente->telefono)]) ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Dirección</label>
                <?= form_input(['name' => 'direccion', 'class' => 'form-control', 'value' => set_value('direccion', $cliente->direccion)]) ?>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= site_url('clientes') ?>" class="btn btn-secondary">Cancelar</a>
        <?= form_close() ?>
    </div>
</div>