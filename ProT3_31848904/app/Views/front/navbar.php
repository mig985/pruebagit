<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link <?= uri_string() == '' ? 'active' : '' ?>" href="<?= site_url('/') ?>">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= uri_string() == 'nosotros' ? 'active' : '' ?>" href="<?= site_url('nosotros') ?>">Nosotros</a>
    </li>

    <?php if (session()->get('logueado')): ?>
        <!-- Mostrar solo si está logueado -->
        <li class="nav-item">
            <a class="nav-link disabled">Sesión - <?= esc(session()->get('nombre')) ?></a>
        </li>

        <!-- Botón para cerrar sesión -->
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('usuario/cerrar_sesion') ?>">Cerrar sesión</a>
        </li>

        <?php if (session()->get('perfil_id') == 1): ?>
            <!-- Botones exclusivos para ADMIN -->
            <li class="nav-item">
                <a class="nav-link" href="#">Admin Panel</a>
            </li>
        <?php elseif (session()->get('perfil_id') == 2): ?>
            <!-- Botones exclusivos para USUARIO COMÚN -->
            <li class="nav-item">
                <a class="nav-link" href="#">Mi Perfil</a>
            </li>
        <?php endif; ?>

    <?php else: ?>
        <!-- Mostrar solo si NO está logueado -->
        <li class="nav-item">
            <a class="nav-link <?= uri_string() == 'login' ? 'active' : '' ?>" href="<?= site_url('login') ?>">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= uri_string() == 'registro' ? 'active' : '' ?>" href="<?= site_url('registro') ?>">Registro</a>
        </li>
    <?php endif; ?>
</ul>


    </div>
  </div>
</nav>