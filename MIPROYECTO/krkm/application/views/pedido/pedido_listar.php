<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f0f9; /* Lila claro de fondo */
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
            background-color: #ffffff; /* Fondo blanco para el contenedor */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #9b59b6; /* Color lila claro */
            padding: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #9b59b6; /* Lila claro */
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #f9f6fd; /* Lila muy claro */
        }
        table tr:hover {
            background-color: #e6e6fa; /* Lila claro al pasar el ratón */
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lista de Pedidos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Pedido</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pedidos as $pedido): ?>
                    <tr>
                        <td><?php echo $pedido->idPedido; ?></td>
                        <td><?php echo $pedido->cliente; ?></td>
                        <td><?php echo $pedido->fechaPedido; ?></td>
                        <td><?php echo number_format($pedido->total, 2); ?> USD</td>
                        <td><?php echo ucfirst($pedido->estado); ?></td>
                        <td class="actions">
                            <a href="<?php echo site_url('pedido/ver/'.$pedido->idPedido); ?>">Ver</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
