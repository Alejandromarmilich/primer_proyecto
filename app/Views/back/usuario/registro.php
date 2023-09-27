<!-- Seccion Registro -->

<section id="registro" class="container my-5 m-md-auto p-md-5">
    <div class="container my-5 m-md-6 p-md-5">
        <h2>Ingrese sus datos para registrarse</h2>

        <?php $validation = \Config\Services::validation(); ?>
        <form class="container row g-3 my-6" method="post" action="<?php echo base_url('/enviar-form') ?>">
            <?= csrf_field(); ?>
            <?= csrf_field(); ?>
            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
            <?php endif ?>
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
            <?php endif ?>
            <div class="card-body col-6" media="(max-widht:768px)">
                <!-- Nombre del usuario-->
                <div class="form">
                    <div class="col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label text-white mt-2">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                        <!-- Error -->
                        <?php if ($validation->getError('nombre')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('nombre'); ?>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Apellido del usuario-->
                    <div class="col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label text-white mt-2">Apellido</label>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                        <!-- Error -->
                        <?php if ($validation->getError('apellido')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('apellido'); ?>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Nombre de usuario-->
                    <div class="col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label text-white mt-2">Nombre de
                            usuario</label>
                        <input type="text" name="usuario" class="form-control" placeholder="Elija un nombre de usuario">
                        <!-- Error -->
                        <?php if ($validation->getError('usuario')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('usuario'); ?>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Correo electronico del usuario -->
                    <div class="col-lg-6">
                        <label for="inputEmail4" class="form-label text-white mt-2">Correo electrónico</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4"
                            placeholder="Ingrese su correo electrónico">
                        <!-- Error -->
                        <?php if ($validation->getError('email')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('email'); ?>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Contraseña del usuario -->
                    <div class="col-lg-6">
                        <label for="inputPassword4" class="form-label text-white mt-2">Contraseña</label>
                        <input type="password" name="pass" class="form-control" id="inputPassword4"
                            placeholder="Ingrese un contraseña segura">
                        <span id="passwordHelpInline" class="form-text">
                            Su contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y no debe
                            contener espacios, caracteres especiales ni emoji.
                        </span>
                        <!-- Error -->
                        <?php if ($validation->getError('pass')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('pass'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Verificacion de la contraseña del usuario -->
                    <div class="col-lg-6">
                        <label for="inputPassword4" class="form-label text-white mt-2">Contraseña</label>
                        <input type="password" name="pass_confirm" class="form-control" id="inputPassword4"
                            placeholder="Ingrese nuevamente su contraseña">

                        <!-- Error -->
                        <?php if ($validation->getError('pass_confirm')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('pass_confirm'); ?>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Direccion del usuario -->
                    <div class="col-lg-6">
                        <label for="inputAddress" class="form-label text-white mt-2">Dirección</label>
                        <input type="text" name="direccion" class="form-control" id="inputAddress"
                            placeholder="Calle principal 1234">
                        <!-- Error -->
                        <?php if ($validation->getError('direccion')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('direccion'); ?>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Ciudad del usuario -->
                    <div class="col-lg-6">
                        <label for="inputCity" class="form-label text-white mt-2">Ciudad</label>
                        <input type="text" name="ciudad" class="form-control" id="inputCity"
                            placeholder="Ingrese su ciudad">
                        <!-- Error -->
                        <?php if ($validation->getError('ciudad')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('ciudad'); ?>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Provincia del usuario -->
                    <div class="col-lg-6">
                        <label for="inputState" class="form-label text-white mt-2">Provincia</label>
                        <select id="listadoProvincias" class="form-select">
                            <option value="">Seleccione la provincia</option>
                        </select>
                        <!-- Error -->
                        <?php if ($validation->getError('provincia')) { ?>
                        <div class=" alert alert-danger mt-2">
                            <?= $error = $validation->getError('provincia'); ?>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Municipio del usuario -->
                    <div class="col-lg-6">
                        <label for="inputState" class="form-label text-white mt-2">Municipio</label>
                        <select id="listadoMunicipios" class="form-select">
                            <option value="">Seleccione el municipio</option>
                        </select>
                        <!-- Error -->
                        <?php if ($validation->getError('provincia')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('provincia'); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-6">
                        <label for="inputZip" class="form-label text-white mt-2">C.P.</label>
                        <input type="text" name="cp" class="form-control" id="inputZip" placeholder="Código Postal">
                        <!-- Error -->
                        <?php if ($validation->getError('cp')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('cp'); ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary me-3">Registrarme</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Fin seccion Registro -->