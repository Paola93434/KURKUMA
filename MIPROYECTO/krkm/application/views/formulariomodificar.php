<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="my-4"><?php echo isset($usuario) ? 'Modificar Usuario' : 'Agregar Usuario'; ?></h1>

      <?php echo form_open_multipart(isset($usuario) ? 'usuarios/modificarbd' : 'usuarios/guardarbd'); ?>

      <?php if (isset($usuario)): ?>
        <input type="hidden" name="idUsuario" value="<?php echo $usuario->idUsuario; ?>">
      <?php endif; ?>

      <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="<?php echo isset($usuario) ? $usuario->nombre : ''; ?>" placeholder="Ingrese su nombre" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Primer Apellido</label>
        <input type="text" name="primerApellido" class="form-control" value="<?php echo isset($usuario) ? $usuario->primerApellido : ''; ?>" placeholder="Ingrese su primer apellido" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Segundo Apellido</label>
        <input type="text" name="segundoApellido" class="form-control" value="<?php echo isset($usuario) ? $usuario->segundoApellido : ''; ?>" placeholder="Ingrese su segundo apellido" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Login</label>
        <input type="text" name="login" class="form-control" value="<?php echo isset($usuario) ? $usuario->login : ''; ?>" placeholder="Ingrese su login" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Ingrese su password" <?php echo !isset($usuario) ? 'required' : ''; ?>>
      </div>
      <div class="mb-3">
        <label class="form-label">Tipo</label>
        <select name="tipo" class="form-select" required>
          <option value="admin" <?php echo isset($usuario) && $usuario->tipo == 'admin' ? 'selected' : ''; ?>>Administrador</option>
          <option value="user" <?php echo isset($usuario) && $usuario->tipo == 'user' ? 'selected' : ''; ?>>Usuario</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-select" required>
          <option value="activo" <?php echo isset($usuario) && $usuario->estado == 'activo' ? 'selected' : ''; ?>>Activo</option>
          <option value="inactivo" <?php echo isset($usuario) && $usuario->estado == 'inactivo' ? 'selected' : ''; ?>>Inactivo</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary"><?php echo isset($usuario) ? 'Modificar Usuario' : 'Agregar Usuario'; ?></button>

      <?php echo form_close(); ?>
    </div>
  </div>
</div>
