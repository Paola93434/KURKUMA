<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #2c003e; /* Color púrpura oscuro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }
        .login-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            transform: scale(0.9);
            opacity: 0;
            animation: fadeInUp 0.6s forwards;
        }
        @keyframes fadeInUp {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        .login-container img {
            max-width: 100px;
            height: auto;
            margin-bottom: 1.5rem;
        }
        .login-container h2 {
            color: #2c003e; /* Color púrpura oscuro */
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }
        .btn-primary {
            background-color: #2c003e; /* Color púrpura oscuro */
            border-color: #2c003e;
        }
        .btn-primary:hover {
            background-color: #1a002a; /* Púrpura más oscuro */
            border-color: #1a002a;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input {
            border-radius: 6px;
            transition: border-color 0.3s ease;
        }
        .form-group input:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <img src="ruta/a/tu/imagen.jpg" alt="Logo">
            <h2>Iniciar Sesión</h2>
            <?php echo form_open('usuarios/autenticar'); ?>
                <div class="form-group">
                    <label for="login">Login:</label>
                    <input type="text" name="login" id="login" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
</html>
