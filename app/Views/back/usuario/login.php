<!-- Inicio seccion login -->

<section id="login" class="container my-5 px-5 d-flex justify-content-center">
    <div class="col-12 col-md-8 col-lg-4 bg-body my-5 pb-5 rounded">
        <div class="my-5 text-center">
            <h2 class="text-black">Iniciar sesion</h2>
        </div>

        <!-- Mensaje de error -->
        <div class="text-black">
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning" role="alert">
                    <?php session()->getFlashData('msg') ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Inicio seccion de formulario Login -->

        <form class='card' method="post" action="<?php echo base_url('enviarlogin') ?>">
            <div class="card-body" media="(max-width:768px)">
                <div class="mb-2">
                    <div class="form-floating my-3">
                        <input name="email" type="text" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                        <label for="floatingInput">Correo electrónico</label>
                    </div>
                </div>

                <div class="form-floating">
                    <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                    <label for="floatingPassword">Contraseña</label>
                </div>
                <div class="container mt-3">
                    <input type="submit" value="Ingresar" class="btn btn-primary">

                    <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
                    <br><span class="mt-3">¿Aún no se registró? <a href="<?php echo base_url('/registro') ?>">Registrarse aquí</a></span>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Fin de seccion de formulario login -->