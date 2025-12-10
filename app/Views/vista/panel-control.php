<?php echo $this -> extend("plantilla/layout-usuario") ?>
<?php echo $this -> section("contenido") ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/panel.css'); ?>">

<div class="panel-container">
    <div class="panel-box">
        <h1 class="panel-title">
            Panel del Tunnel #<?php echo $servidor["id"] ?>
            <?php if ($online): ?>
                <span class="status-online">ONLINE</span>
            <?php else: ?>
                <span class="status-offline">OFFLINE</span>
            <?php endif; ?>
        </h1>
        <div class="panel-group">
            <label class="panel-label">Nombre</label>
            <input type="text" class="panel-input" value="<?php echo $servidor["nombre"] ?>" readonly>
        </div>
        <div class="panel-group">
            <label class="panel-label">Descripción</label>
            <input type="text" class="panel-input" value="<?php echo $servidor["descripcion"] ?>" readonly>
        </div>
        <div class="panel-group">
            <label class="panel-label">Dominio asignado</label>
            <div class="domain-group">
                <span class="domain-prefix">https://</span>
                <input type="text" class="panel-input" value="<?php echo $servidor["dominio"] ?>" readonly>
            </div>
        </div>
        <?php if ($online): ?>
            <a href="https://<?php echo $servidor["dominio"] ?>" class="btn-success visit-btn">Visitar</a>
        <?php else: ?>
            <a class="btn-danger visit-btn">OFFLINE</a>
        <?php endif; ?>
        <ul class="panel-list">
            <li class="panel-list-item">
                Fecha de creación:
                <span><?php echo $fecha_creacion ?? "N/A" ?></span>
            </li>
            <li class="panel-list-item">
                Token:
                <span><?php echo $token ?? "Ninguno por el momento"; ?></span>
            </li>
        </ul>
        <div class="button-row">
            <button class="btn-danger-outline">Eliminar Tunnel</button>
            <a class="btn-secondary-outline" href="<?php echo base_url('general/token/'.$servidor['id']) ?>">Regenerar token</a>
        </div>
    </div>
</div>

<?php echo $this -> endSection() ?>
