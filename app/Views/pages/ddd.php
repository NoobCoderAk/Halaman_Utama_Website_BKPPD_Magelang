<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <ol class="carousel-indicators">
        <?php $i = 0; ?>
        <?php foreach ($daftar_carousel as $carousel) : ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i; ?>" class="<?= $i == 0 ? 'active' : ''; ?>"></li>
            <?php $i++; ?>
        <?php endforeach; ?>
    </ol>
    <div class="carousel-inner">
        <?php $i = 0; ?>
        <?php foreach ($daftar_carousel as $carousel) : ?>
            <div class="carousel-item <?= $i == 0 ? 'active' : ''; ?>">
                <img src="<?= base_url('/Assets/Images/' . $carousel->gambar_carousel); ?>" class="c-img d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $carousel->judul_carousel; ?></h5>
                    <p><?= $carousel->deskripsi_carousel; ?></p>
                </div>
            </div>
            <?php $i++; ?>
        <?php endforeach; ?>
    </div>
    <a onclick="on()" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>