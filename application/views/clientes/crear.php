<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h1 class="mb-4">Nuevo cliente</h1>

<?= validation_errors('<div class="alert alert-danger">', '</div>') ?>

<div class="card">
    <div class="card-body">
        <?= form_open('clientes/crear') ?>
            <div class="mb-3">
                <label class="form-label">Nombres</label>
                <?= form_input(['name' => 'nombres', 'class' => 'form-control', 'value' => set_value('nombres')]) ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <?= form_input(['name' => 'apellidos', 'class' => 'form-control', 'value' => set_value('apellidos')]) ?>
            </div>
            <div class="mb-3">
                <label class="form-label">DPI</label>
                <?= form_input(['name' => 'dpi', 'class' => 'form-control', 'value' => set_value('dpi')]) ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <?= form_input(['name' => 'telefono', 'class' => 'form-control', 'value' => set_value('telefono')]) ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Dirección</label>
                <?= form_input(['name' => 'direccion', 'class' => 'form-control', 'value' => set_value('direccion')]) ?>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="<?= site_url('clientes') ?>" class="btn btn-secondary">Cancelar</a>
        <?= form_close() ?>
    </div>
</div>