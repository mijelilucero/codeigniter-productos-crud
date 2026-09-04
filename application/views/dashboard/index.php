<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h1 class="mb-4">Dashboard</h1>

<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <div class="fs-4 fw-semibold"><?= $total_clientes ?></div>
                <div>Clientes registrados</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card text-white bg-info">
            <div class="card-body">
                <div class="fs-4 fw-semibold"><?= $fecha_actual ?></div>
                <div>Fecha actual</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <div class="fs-4 fw-semibold">CodeIgniter 3</div>
                <div>Framework</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card text-white bg-danger">
            <div class="card-body">
                <div class="fs-4 fw-semibold"><?= phpversion() ?></div>
                <div>Versión de PHP</div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="text-body-secondary small">Base de datos</div>
                <div class="fs-5 fw-semibold">MariaDB</div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="text-body-secondary small">Gestor de dependencias</div>
                <div class="fs-5 fw-semibold">Composer</div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="text-body-secondary small">UI Template</div>
                <div class="fs-5 fw-semibold">CoreUI Free</div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        Sobre esta tarea
    </div>
    <div class="card-body">
        <p>
            Prueba de concepto de un CRUD de <strong>Clientes</strong>, desarrollado como tarea de
            familiarización con CodeIgniter 3 previa al proyecto del curso de Desarrollo Web.
        </p>
        <ul class="mb-0">
            <li>Conexión a base de datos configurada vía <code>.env</code> con <code>vlucas/phpdotenv</code></li>
            <li>Entorno ajustado para correr sobre PHP 8.5</li>
            <li>Interfaz basada en la plantilla gratuita de CoreUI</li>
            <li>CRUD completo con validación de formularios y mensajes de confirmación</li>
        </ul>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Clientes
    </div>
    <div class="card-body">
        <p class="text-body-secondary">Gestiona el registro de clientes del sistema.</p>
        <a href="<?= site_url('clientes') ?>" class="btn btn-primary">Ir a Clientes</a>
    </div>
</div>