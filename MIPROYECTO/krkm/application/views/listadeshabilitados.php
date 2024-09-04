<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Estudiantes Deshabilitados</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }
        .btn-primary, .btn-warning {
            border-radius: 20px;
        }
        .table {
            margin-top: 20px;
        }
        .table thead {
            background-color: #007bff;
            color: #ffffff;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Lista de Estudiantes Deshabilitados</h1>

    <?php echo form_open_multipart('estudiante/index'); ?>
        <button type="submit" name="buton2" class="btn btn-primary btn-block">VER ESTUDIANTES HABILITADOS</button>
    <?php echo form_close(); ?>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Primer Apellido</th>
            <th scope="col">Segundo Apellido</th>
            <th scope="col">Nota</th>
            <th scope="col">Habilitar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $indice = 1;
          foreach ($estudiantes->result() as $row) {
          ?>
          <tr>
            <th scope="row"><?php echo $indice; ?></th>
            <td><?php echo $row->nombre; ?></td>
            <td><?php echo $row->primerApellido; ?></td>
            <td><?php echo $row->segundoApellido; ?></td>
            <td><?php echo $row->nota; ?></td>
            <td>
              <?php echo form_open_multipart("estudiante/habilitarbd"); ?>
              <input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante; ?>">
              <input type="submit" name="buttonz" value="Habilitar" class="btn btn-warning btn-block">
              <?php echo form_close(); ?>
            </td>
          </tr>
          <?php
            $indice++;
          }
          ?>
        </tbody>
    </table>
</div>

</body>
</html>
