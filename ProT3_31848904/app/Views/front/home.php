<div class="text-center mt-4">
    <h2>Bienvenido a Relojes Correntinos</h2>
    <p class="lead">Nuestra pasión por el tiempo te acompaña desde siempre.</p>
</div>

<!-- Carrusel al final de la página -->
<div id="carouselInicio" class="carousel slide my-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner text-center">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/img/slide1.jpg') ?>" class="img-fluid mx-auto" style="max-height: 200px; width: auto;" alt="Primera imagen">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/slide2.jpg') ?>" class="img-fluid mx-auto" style="max-height: 200px; width: auto;" alt="Segunda imagen">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/slide3.jpg') ?>" class="img-fluid mx-auto" style="max-height: 200px; width: auto;" alt="Tercera imagen">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselInicio" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselInicio" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
