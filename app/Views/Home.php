<?php echo $this->extend("plantilla/layout") ?>
<?php echo $this->section("contenido") ?>

<div class="container my-5">
    <h1 class="border p-3 text-center rounded bg-light shadow-sm">
        ¡Crea, protege y disfruta a bajos costos con MIGI!
    </h1>

    <div class="text-center mt-4">
        <p>Crear servidores host en Colombia nunca fue tan fácil con <strong>MIGI</strong>.</p>
        <p>Fácil, rápido, seguro y a los mejores precios.</p>
        <p>¿Qué esperas para unirte y guardar tus archivos de forma segura en Colombia?</p>
    </div>

    <div class="text-center mt-4">
        <a class="btn btn-success btn-lg rounded-pill shadow" href="<?= base_url("/login/crearcuenta") ?>">
            <i class="fa-solid fa-user-plus me-2"></i> Registrarse gratis
        </a>
    </div>
</div>

<hr class="my-5">

<div class="container">
    <h2 class="text-center mb-4">¿Por qué elegirnos?</h2>
    <div class="row justify-content-center">

        <div class="col-md-3 col-sm-6 m-2 p-3 border rounded shadow-sm text-center bg-white">
            <i class="fa-solid fa-shield-halved fa-2x text-success mb-3"></i>
            <h4>Seguridad</h4>
            <p>
                Nuestro servicio busca ser fácil de usar y muy accesible
                para todos los que desean montar sus servidores en Colombia.
            </p>
        </div>

        <div class="col-md-3 col-sm-6 m-2 p-3 border rounded shadow-sm text-center bg-white">
            <i class="fa-solid fa-bolt fa-2x text-warning mb-3"></i>
            <h4>Fácil uso</h4>
            <p>
                No necesitas experiencia previa. Con nuestra interfaz
                y documentación podrás usar el servicio fácilmente.
            </p>
        </div>

        <div class="col-md-3 col-sm-6 m-2 p-3 border rounded shadow-sm text-center bg-white">
            <i class="fa-solid fa-star fa-2x text-primary mb-3"></i>
            <h4>Mejor opción</h4>
            <p>
                Servicio accesible, confiable y rápido para todos los
                que buscan montar su servidor en Colombia.
            </p>
        </div>

    </div>
</div>

<?php echo $this->endSection() ?>