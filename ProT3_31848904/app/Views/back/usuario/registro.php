<div class="container mt-5" style="max-width: 500px;">
  <div class="card shadow">
    <div class="card-header bg-success text-white text-center">
      <h3 class="mb-0">Registro de Usuario</h3>
      <p class="mb-0">Completá el formulario para crear tu cuenta:</p>
    </div>
    <div class="card-body">
      <form role="form" action="<?= site_url('usuario/guardar') ?>" method="post">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" name="apellido" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="usuario" class="form-label">Nombre de usuario</label>
          <input type="text" name="usuario" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" name="password" class="form-control" required>
        </div>
    
        <input type="hidden" name="baja" value="NO">
        <button type="submit" class="btn btn-success w-100">Registrarse</button>
      </form>
    </div>
  </div>
</div>
