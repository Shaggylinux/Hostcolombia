<?php echo $this->extend("plantilla/layout-usuario") ?>
<?php echo $this->section("contenido") ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Panel del Tunnel #<?php echo $servidor["id"] ?></h1>
        <?php if ($online): ?>
            <span class="badge bg-success fs-5">ONLINE</span>
        <?php else: ?>
            <span class="badge bg-danger fs-5">OFFLINE</span>
        <?php endif; ?>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">

            <h5 class="card-title mb-3">Información del Tunnel</h5>

            <div class="mb-3">
                <label class="form-label fw-bold">Nombre</label>
                <input type="text" class="form-control" value="<?php echo $servidor["nombre"] ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Descripción</label>
                <input type="text" class="form-control" value="<?php echo $servidor["descripcion"] ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Dominio asignado</label>
                <div class="input-group">
                    <span class="input-group-text">https://</span>
                    <input type="text" class="form-control" value="<?php echo $servidor["dominio"] ?>" readonly>
                </div>
            </div>

            <?php if ($online): ?>
                <a href="https://<?php echo $servidor["dominio"] ?>" class="btn btn-primary w-100 mt-3"> Visitar túnel </a>
            <?php else:?>
                <a class="btn btn-danger w-100 mt-3"> OFFLINE </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h5 class="card-title mb-3">Actividad reciente</h5>

            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between">
                    Último cambio de estado:
                    <span class="fw-bold">Hace 2 minutos</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    Total de accesos:
                    <span class="fw-bold">0 (por ahora)</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    Fecha de creación:
                    <span class="fw-bold"><?php echo $servidor["fecha_creacion"] ?? "N/A" ?></span>
                </li>
            </ul>
        </div>
    </div>

    <div class="d-flex gap-3">
        <button class="btn btn-outline-secondary w-100">Regenerar token</button>
        <button class="btn btn-outline-danger w-100">Eliminar</button>
    </div>

</div>

<?php echo $this->endSection() ?>
