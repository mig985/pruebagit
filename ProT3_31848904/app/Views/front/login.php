<div class="container mt-5" style="max-width: 400px;">
  <div class="card shadow">
    <div class="card-header bg-success text-white text-center">
      <h3 class="mb-0">Iniciar Sesión</h3>
      <p class="mb-0">Ingresá tus datos para acceder:</p>
    </div>
    <div class="card-body">
    	<?php if(session()->getFlashdata('error')): ?>
  <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<?php if(session()->getFlashdata('success')): ?>
  <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

      <form action="<?= site_url('usuario/ingresar') ?>" method="post">
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuario o Email</label>
          <input type="text" name="usuario" id="usuario" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Ingresar</button>
      </form>
    </div>
  </div>
</div>
