<div class="container mt-5">
    <div class="custom-card">
        <h1 class="text-center mb-4">Lista de Empleados</h1>

        <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
    
        <div class="d-flex justify-content-center mb-4">

            <a href="<?php echo site_url('empleados/crear'); ?>" class="btn btn-primary btn-add">Agregar Empleado</a>
        </div>
        
        <div class="table-responsive">
            <table class="table table-hover custom-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Puesto</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($empleados as $empleado): ?>
                        <tr>
                            <td><?php echo $empleado['idEmpleado']; ?></td>
                            <td><?php echo $empleado['nombre']; ?></td>
                            <td><?php echo $empleado['apellido']; ?></td>
                            <td><?php echo $empleado['email']; ?></td>
                            <td><?php echo $empleado['telefono']; ?></td>
                            <td><?php echo $empleado['puesto']; ?></td>
                            <td>
                                <?php echo ($empleado['estado'] == 1) ? '<span class="badge badge-success">Activo</span>' : '<span class="badge badge-secondary">Inactivo</span>'; ?>
                            </td>
                            <td>
                                <a href="<?php echo site_url('empleados/editar/'.$empleado['idEmpleado']); ?>" class="btn btn-success btn-sm btn-edit">Editar</a>
                                <a href="<?php echo site_url('empleados/eliminar/'.$empleado['idEmpleado']); ?>" class="btn btn-danger btn-sm btn-delete">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- CSS -->
<style>
    /* Estilos generales del card */
    .custom-card {
        background-color: #f7f3f9;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border: 2px solid #7E57C2;
        margin-bottom: 30px; /* Más espacio debajo del card */
    }

    /* Estilo del título */
    .custom-card h1 {
        color: #4A148C;
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 30px; /* Espacio adicional debajo del título */
    }

    /* Estilo del botón "Agregar Empleado" */
    .btn-add {
        background-color: #7E57C2;
        border: none;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        margin-bottom: 30px; /* Espacio entre el botón y la tabla */
    }

    .btn-add:hover {
        background-color: #5e3f96;
    }

    /* Estilos de la tabla */
    .custom-table {
        background-color: white;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
    }

    .custom-table thead th {
        background-color: #4A148C;
        color: white;
        font-weight: bold;
        padding: 15px;
    }

    .custom-table tbody tr {
        background-color: #F3E5F5;
        transition: background-color 0.3s ease;
    }

    .custom-table tbody tr:hover {
        background-color: #e1d4eb;
    }

    .custom-table tbody td {
        padding: 12px;
        text-align: center;
    }

    /* Estilos de los botones de acción */
    .btn-edit, .btn-delete {
        margin-right: 5px; /* Separación entre botones */
    }

    .btn-edit {
        background-color: #81C784;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-edit:hover {
        background-color: #66bb6a;
    }

    .btn-delete {
        background-color: #e57373;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-delete:hover {
        background-color: #ef5350;
    }

    /* Hacer la tabla más responsiva */
    @media (max-width: 768px) {
        .custom-card {
            padding: 20px;
        }

        .custom-table tbody td {
            font-size: 0.9rem;
            padding: 10px;
        }

        .btn-add {
            padding: 10px 20px;
        }
    }
</style>
