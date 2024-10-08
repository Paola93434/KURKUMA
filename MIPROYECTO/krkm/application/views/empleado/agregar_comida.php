<!-- application/views/empleado/agregar_plato.php -->
<h1>Agregar Plato al Menú</h1>
<form action="<?php echo site_url('empleado/agregar_plato'); ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="categoria">Categoría:</label>
    <select name="categoria" id="categoria">
        <option value="Lácteos">Lácteos</option>
        <option value="Verduras">Verduras</option>
        <option value="Frutas">Frutas</option>
        <option value="Carnes">Carnes</option>
    </select>

    <label for="temporada">Temporada:</label>
    <select name="temporada" id="temporada">
        <option value="Invierno">Invierno</option>
        <option value="Primavera">Primavera</option>
        <option value="Temporada Más">Temporada Más</option>
    </select>

    <label for="precio_compra">Precio de Compra:</label>
    <input type="number" name="precio_compra" id="precio_compra" step="0.01" required>

    <button type="submit">Agregar</button>
</form>
