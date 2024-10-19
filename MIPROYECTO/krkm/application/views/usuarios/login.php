<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
    <script src="<?php echo base_url('assets/js/login.js'); ?>" defer></script>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                <label for="tab-1" class="tab">Iniciar Sesión</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up">
                <label for="tab-2" class="tab">Registrarse</label>

                <!-- Formulario de Iniciar Sesión -->
                <form class="login-form sign-in" action="<?php echo site_url('usuarios/autenticar'); ?>" method="POST">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="login" class="label">Usuario</label>
                            <input id="login" name="login" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="password" class="label">Contraseña</label>
                            <input id="password" name="password" type="password" class="input" required>
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Mantenerme conectado</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Iniciar Sesión">
                        </div>
                    </div>
                </form>

                <!-- Formulario de Registro -->
                <form class="login-form sign-up" action="<?php echo site_url('usuarios/guardarbd'); ?>" method="POST">
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="nombre" class="label">Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="primerApellido" class="label">Primer Apellido</label>
                            <input id="primerApellido" name="primerApellido" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="login-reg" class="label">Usuario</label>
                            <input id="login-reg" name="login" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="password-reg" class="label">Contraseña</label>
                            <input id="password-reg" name="password" type="password" class="input" required>
                        </div>
                        <div class="group">
                            <label for="email" class="label">Correo Electrónico</label>
                            <input id="email" name="email" type="email" class="input" required>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Registrarse">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

