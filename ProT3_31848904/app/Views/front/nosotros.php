<style>
    .card-femenino {
        background: linear-gradient(145deg, #ffe0f0, #fff0f6);
        border: 2px solid #ffc2dc;
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(255, 182, 193, 0.5);
        position: relative;
    }

    .card-masculino {
        background: linear-gradient(145deg, #e0f0ff, #f0f8ff);
        border: 2px solid #a3d0ff;
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(100, 149, 237, 0.5);
        position: relative;
    }

    .emoji {
        position: absolute;
        top: -15px;
        right: -15px;
        font-size: 2rem;
    }
</style>

<div class="container py-5">
    <h1 class="text-center mb-4"><?= esc($titulo) ?></h1>
    <div class="row">
        <?php foreach ($equipo as $persona): ?>
            <div class="col-md-4 mb-4">
                <div class="card 
                    <?= $persona['genero'] === 'femenino' ? 'card-femenino' : 'card-masculino' ?> 
                    h-100">
                    <div class="emoji">
                        <?= $persona['genero'] === 'femenino' ? '💖' : '🚀' ?>
                    </div>
                    <img src="<?= base_url('assets/img/' . $persona['foto']) ?>"
     class="card-img-top"
     alt="<?= esc($persona['nombre']) ?>"
     style="height:250px; width:auto; object-fit:contain; display:block; margin:auto;">

                    <div class="card-body text-center">
                        <h5 class="card-title"><?= esc($persona['nombre']) ?></h5>
                        <p class="card-text"><?= esc($persona['descripcion']) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
