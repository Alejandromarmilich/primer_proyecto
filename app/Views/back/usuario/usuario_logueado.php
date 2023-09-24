<!-- Inicio Secccion Usuario Logueado -->

<section>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col">
                <br><br>
                <div class="container my-5 col-6 d-flex justify-content-center">
                    <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if (session()->perfil_id == 1) : ?>
                <div class="container">
                    <img class="d-flex justify-content-center" height="300px" width="300px"
                        src="<?php echo base_url('/assets/img/admin.png'); ?>" alt="admin">
                </div>
                <?php elseif (session()->perfil_id == 2) : ?>
                <div class="container">
                    <img class="d-flex justify-content-center my-5" height="200px" width="200px"
                        src="<?php echo base_url('/assets/img/cliente.png'); ?>" alt="cliente">
                </div>
            </div>

            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Fin Seccion Usuario Logueado -->