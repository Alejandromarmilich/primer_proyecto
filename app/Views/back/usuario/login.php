<!-- Mensaje de error -->
<?php if (session()->getFlashdata('msg')):?>
    <div class="alert alert-warning" role="alert">
        <?php session()->getFlashData("msg") ?>
    </div>
<?php endif;?>

<!-- Inicio seccion de formulario Login -->

<section id="login" class="container my-5">
    <div class='container my-5'>
        <h2 class="text-center">Ingrese su correo y contraseña para ingresar</h2>
        <form class='container card' method="post" action="<?php echo base_url('/enviarlogin')?>">
        <div class="card-body" media="(max-width:768px)">
            <div class="mb-2">
                <div class="form-floating my-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Correo electrónico</label>
                </div>
                <div id="emailHelp" class="form-text">Nunca compartiremos tu correo con nadie.
                </div>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
                <span id="passwordHelpInline" class="form-text">
                    Su contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y no debe contener espacios, caracteres especiales ni emoji.
                </span>
            </div>
            
            <input type="submit" value="Ingresar" class="btn btn-sucess">
            <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
            <br><span>¿Aún no se registró? <a href="<?php echo base_url('/registro') ?>">Registrarse aquí</a></span>
        </div>
        </form>
    </div>
</section>

<!-- Fin de seccion de formulario login -->