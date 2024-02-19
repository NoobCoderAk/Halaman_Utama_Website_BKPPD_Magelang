<div class="col" style="min-height: 100vh;">
    <!-- Carousel -->
    <section id="heroCarousel" style="padding-left: 15%; padding-right: 15%; ">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $i = 0; ?>
                <?php foreach ($daftar_carousel as $carousel) : ?>
                    <div class="carousel-item <?= $i == 0 ? 'active' : ''; ?>">
                        <img src="<?= base_url('/Assets/Images/' . $carousel->gambar_carousel); ?>" class="c-img d-block w-100" alt=" ...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?= $carousel->judul_carousel; ?></h5>
                            <p><?= $carousel->deskripsi_carousel; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- End of Carousel -->




    <!-- E-Goverment -->
    <section id="egoverment">
        <div class="row head-egov text-center ">
            <p>E-Goverment</p>
        </div>
        <div class="row justify-content-center container-egov">
            <div class="row overflow-auto justify-content-center row-cols-1 row-cols-md-3 g-2" style="height: 300px;">
                <?php foreach ($daftar_egov as $egov) : ?>
                    <div class="col">
                        <div class="card card-egov shadow mb-3" style="max-width: 540px;">
                            <div class="row g-0" style="height: 100%;">
                                <div class="col-md-4">
                                    <img src="<?= base_url('/Assets/Images/' . $egov->gambar_egov); ?>" class="img-fluid rounded-start cd-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold"><?= $egov->judul_egov; ?></h5>
                                        <p class="card-text"><?= $egov->deskripsi_egov; ?></p>
                                        <a class="btn btn-light shadow text-success fw-bold" href="<?= $egov->link_egov; ?>" role="button">Lihat
                                            Aplikasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End of E-Goverment -->




    <!-- Informasi -->
    <section id="informasi" class="shadow">
        <div class="row container-info ">
            <!-- berita -->
            <div class="col-md-6 berita">
                <div class="row head-berita text-center">
                    <h2>Berita Utama</h2>
                </div>
                <div class="row container-berita justify-content-center">
                    <div class="row berita-card-container overflow-auto shadow row-cols-md-2">
                        <div class="col-md-6">
                            <div class="card shadow mb-3">
                                <img src="/Assets/Images/contoh-crsl.jpg" class="card-img-top berita-img img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-link"><a href="">Card title</a></h5>
                                    <p class="card-text text-link"><a href="">Card Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores adipisci maiores iusto ducimus ipsum dolorum facere illum doloribus soluta ut qui quia totam fuga neque minus assumenda, aspernatur, perferendis voluptates.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow mb-3">
                                <img src="/Assets/Images/contoh-crsl.jpg" class="card-img-top berita-img img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-link"><a href="">Card title</a></h5>
                                    <p class="card-text text-link"><a href="">Card Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores adipisci maiores iusto ducimus ipsum dolorum facere illum doloribus soluta ut qui quia totam fuga neque minus assumenda, aspernatur, perferendis voluptates.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow mb-3">
                                <img src="/Assets/Images/contoh-crsl.jpg" class="card-img-top berita-img img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-link"><a href="">Card title</a></h5>
                                    <p class="card-text text-link"><a href="">Card Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores adipisci maiores iusto ducimus ipsum dolorum facere illum doloribus soluta ut qui quia totam fuga neque minus assumenda, aspernatur, perferendis voluptates.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow mb-3">
                                <img src="/Assets/Images/contoh-crsl.jpg" class="card-img-top berita-img img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-link"><a href="">Card title</a></h5>
                                    <p class="card-text text-link"><a href="">Card Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores adipisci maiores iusto ducimus ipsum dolorum facere illum doloribus soluta ut qui quia totam fuga neque minus assumenda, aspernatur, perferendis voluptates.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of berita -->

            <!-- galeri -->
            <div class="col-md-6 galeri">
                <div class="head-galeri text-center">
                    <h2>Galeri</h2>
                </div>
                <div class="row container-galeri justify-content-center">
                    <div class="row galeri-card-container overflow-auto shadow row-cols-md-2">
                        <?php foreach (array_slice($daftar_galeri, 0, 20) as $galeri) : ?>
                            <div class="col-md-6">
                                <div class="card shadow mb-3">
                                    <img src="<?= base_url('/Assets/Images/' . $galeri->gambar_galeri); ?>" class="card-img-top glr-img img-fluid" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-link"><a href="<?= $galeri->link_galeri; ?>"><?= $galeri->judul_galeri; ?></a></h5>
                                        <p class=" small card-text text-link"><a href="<?= $galeri->link_galeri; ?>"><?= $galeri->deskripsi_galeri; ?></a></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- end of galeri -->
        </div>
    </section>
    <!-- End of Informasi -->




    <!-- Informasi-2 -->
    <section id="informasi-2" class="shadow">
        <div class=" row container-informasi-2 ">
            <div class="col-md-6 pengumuman">
                <div class="row head-pengumuman text-center">
                    <h2>Pengumuman</h2>
                </div>
                <div class="row container-pengumuman shadow justify-content-center">
                    <div class="row pengumuman-card-container overflow-auto row-cols-md-2">
                        <?php foreach (array_slice($daftar_pengumuman, -2) as $pengumuman) : ?>
                            <div class="col-md-6">
                                <div class="card shadow mb-3">
                                    <img src="<?= base_url('/Assets/Images/' . $pengumuman->gambar_pengumuman); ?>" class="card-img-top pengumuman-img img-fluid" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-link"><a href="<?= $pengumuman->link_pengumuman; ?>"><?= $pengumuman->judul_pengumuman; ?></a></h5>
                                        <p class=" small card-text text-link"><a href="<?= $pengumuman->link_pengumuman; ?>"><?= $pengumuman->deskripsi_pengumuman; ?></a></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row link-pengumuman text-center"><a href="https://bkppd.magelangkab.go.id/home/category/292" style="color: green;">Lihat Selengkapnya..</a></div>
                </div>
            </div>
            <div class="col-md-6 artikel">
                <div class="row head-artikel text-center">
                    <h2>Artikel</h2>
                </div>
                <div class="row container-artikel shadow justify-content-center">
                    <div class="row artikel-card-container overflow-auto row-cols-md-2">
                        <?php foreach (array_slice($daftar_artikel, -2) as $artikel) : ?>
                            <div class="col-md-6">
                                <div class="card shadow mb-3">
                                    <img src="<?= base_url('/Assets/Images/' . $artikel->gambar_artikel); ?>" class="card-img-top artikel-img img-fluid" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-link"><a href="<?= $artikel->link_artikel; ?>"><?= $artikel->judul_artikel; ?></a></h5>
                                        <p class=" small card-text text-link"><a href="<?= $artikel->link_artikel; ?>"><?= $artikel->deskripsi_artikel; ?></a></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row link-artikel text-center"><a href="https://bkppd.magelangkab.go.id/home/category/291" style="color: green;">Lihat Selengkapnya..</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Informasi-2 -->




    <!-- Informasi-3 -->
    <section id="informasi-3" class="shadow">
        <div class=" row container-informasi-3 ">
            <div class="col-md-6 agenda">
                <div class="row head-agenda justify-content-center text-center ">
                    <h2>Agenda</h2>
                </div>
                <div class="row container-agenda shadow justify-content-center">
                    <div class="row agenda-card-container overflow-auto row-cols-md-2">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <img src="/Assets/Images/contoh-crsl.jpg" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow mb-3">
                                <img src="/Assets/Images/contoh-crsl.jpg" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row link-agenda text-center"><a href="https://bkppd.magelangkab.go.id/home/category/292" style="color: green;">Lihat Selengkapnya..</a></div>
                </div>
            </div>
            <div class="col-md-6 jadwal">
                <div class="row head-jadwal text-center">
                    <h2>Jadwal</h2>
                </div>
                <div class="row container-jadwal shadow justify-content-center">
                    <div class="row jadwal-card-container overflow-auto row-cols-md-2">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <img src="/Assets/Images/contoh-crsl.jpg" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow mb-3">
                                <img src="/Assets/Images/contoh-crsl.jpg" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row link-jadwal text-center"><a href="https://bkppd.magelangkab.go.id/home/category/291" style="color: green;">Lihat Selengkapnya..</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Informasi-3 -->





    <!-- Informasi-4 -->
    <section id="informasi-4" class="shadow">
        <div class=" row d-flex container-informasi-4 row-cols-md-2">
            <div class="col-md-6 map">
                <div class="row head-map justify-content-center text-center ">
                    <h2>Maps</h2>
                </div>
                <div style="height: 20px;"></div>
                <div class="row container-map shadow justify-content-center">
                    <div id="map-container-google-1" class="z-depth-1-half container-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3954.8394183110845!2d110.2177259!3d-7.5924503!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8db9f5a200c9%3A0x441ca33ac68ce4e0!2sKantor%20Bupati%20Kabupaten%20Magelang!5e0!3m2!1sen!2sid!4v1706493590217!5m2!1sen!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6 statistik">
                <div class="row head-statistik text-center">
                    <h2>Statistik</h2>
                </div>
                <div style="height: 20px;"></div>
                <div class="row container-statistik shadow justify-content-center">
                    <figure class="highcharts-figure">
                        <div id="container" data-highcharts-chart="0" style="overflow: auto;">
                            <div id="highcharts-kem1pvk-0" dir="ltr" style="position: relative; overflow: hidden; width: 323px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); user-select: none; touch-action: manipulation; outline: none;" class="highcharts-container "><svg version="1.1" class="highcharts-root" style="font-family: Helvetica, Arial, sans-serif; font-size: 1rem;" xmlns="http://www.w3.org/2000/svg" width="323" height="400" viewBox="0 0 323 400" role="img" aria-label="Survei Kepuasan">
                                    <desc>Created with Highcharts 11.3.0</desc>
                                    <defs>
                                        <filter id="highcharts-drop-shadow-0">
                                            <feDropShadow dx="1" dy="1" flood-color="#000000" flood-opacity="0.75" stdDeviation="2.5"></feDropShadow>
                                        </filter>
                                        <clipPath id="highcharts-kem1pvk-2-">
                                            <rect x="0" y="0" width="289" height="303" fill="none"></rect>
                                        </clipPath>
                                        <filter id="highcharts-drop-shadow-0-offsetx--1-offsety--1">
                                            <feDropShadow dx="-1" dy="-1" flood-color="#000000" flood-opacity="0.75" stdDeviation="2.5"></feDropShadow>
                                        </filter>
                                    </defs>
                                    <rect fill="#ffffff" class="highcharts-background" filter="none" x="0" y="0" width="323" height="400" rx="0" ry="0"></rect>
                                    <rect fill="none" class="highcharts-plot-background" x="10" y="46" width="303" height="289" filter="none"></rect>
                                    <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1">
                                        <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 9.5 46 L 9.5 335" opacity="1"></path>
                                        <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 70.5 46 L 70.5 335" opacity="1"></path>
                                        <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 130.5 46 L 130.5 335" opacity="1"></path>
                                        <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 191.5 46 L 191.5 335" opacity="1"></path>
                                        <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 251.5 46 L 251.5 335" opacity="1"></path>
                                        <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 313.5 46 L 313.5 335" opacity="1"></path>
                                    </g>
                                    <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1">
                                        <path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 10 335.5 L 313 335.5" opacity="1"></path>
                                        <path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 10 46.5 L 313 46.5" opacity="1"></path>
                                    </g>
                                    <rect fill="none" class="highcharts-plot-border" data-z-index="1" stroke="#cccccc" stroke-width="0" x="10" y="46" width="303" height="289"></rect>
                                    <g class="highcharts-axis highcharts-yaxis" data-z-index="2"><text x="313" data-z-index="7" text-anchor="end" transform="translate(0,0)" class="highcharts-axis-title" style="color: rgb(102, 102, 102); font-size: 0.8em; fill: rgb(102, 102, 102);" y="382">Jumlah (Survei)</text>
                                        <path fill="none" class="highcharts-axis-line" stroke="#333333" stroke-width="0" data-z-index="7" d="M 10 335 L 313 335"></path>
                                    </g>
                                    <g class="highcharts-axis highcharts-xaxis" data-z-index="2">
                                        <path fill="none" class="highcharts-axis-line" stroke="#333333" stroke-width="1" data-z-index="7" d="M 9.5 46 L 9.5 335"></path>
                                    </g>
                                    <g class="highcharts-series-group" data-z-index="3" filter="none">
                                        <g class="highcharts-series highcharts-series-0 highcharts-bar-series highcharts-color-0 highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(10,46) rotate(90 7 296) scale(-1 1)" clip-path="url(#highcharts-kem1pvk-2-)">
                                            <path fill="#058DC7" d="M 194.5 61.5 L 223.5 61.5 A 3 3 0 0 1 226.5 64.5 L 226.5 303.5 A 0 0 0 0 1 226.5 303.5 L 191.5 303.5 A 0 0 0 0 1 191.5 303.5 L 191.5 64.5 A 3 3 0 0 1 194.5 61.5 Z" stroke="#ffffff" stroke-width="1" opacity="1" filter="none" class="highcharts-point highcharts-color-0"></path>
                                        </g>
                                        <g class="highcharts-markers highcharts-series-0 highcharts-bar-series highcharts-color-0" data-z-index="0.1" opacity="1" transform="translate(10,46) scale(1 1)" clip-path="none">
                                        </g>
                                        <g class="highcharts-series highcharts-series-1 highcharts-bar-series highcharts-color-1 highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(10,46) rotate(90 7 296) scale(-1 1)" clip-path="url(#highcharts-kem1pvk-2-)">
                                            <path fill="rgb(80,180,50)" d="M 151.5 61.5 L 180.5 61.5 A 3 3 0 0 1 183.5 64.5 L 183.5 303.5 A 0 0 0 0 1 183.5 303.5 L 148.5 303.5 A 0 0 0 0 1 148.5 303.5 L 148.5 64.5 A 3 3 0 0 1 151.5 61.5 Z" stroke="#ffffff" stroke-width="1" opacity="1" filter="none" class="highcharts-point highcharts-color-1"></path>
                                        </g>
                                        <g class="highcharts-markers highcharts-series-1 highcharts-bar-series highcharts-color-1" data-z-index="0.1" opacity="1" transform="translate(10,46) scale(1 1)" clip-path="none">
                                        </g>
                                        <g class="highcharts-series highcharts-series-2 highcharts-bar-series highcharts-color-2 highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(10,46) rotate(90 7 296) scale(-1 1)" clip-path="url(#highcharts-kem1pvk-2-)">
                                            <path fill="#ED561B" d="M 107.5 182.5 L 136.5 182.5 A 3 3 0 0 1 139.5 185.5 L 139.5 303.5 A 0 0 0 0 1 139.5 303.5 L 104.5 303.5 A 0 0 0 0 1 104.5 303.5 L 104.5 185.5 A 3 3 0 0 1 107.5 182.5 Z" stroke="#ffffff" stroke-width="1" opacity="1" filter="none" class="highcharts-point highcharts-color-2"></path>
                                        </g>
                                        <g class="highcharts-markers highcharts-series-2 highcharts-bar-series highcharts-color-2" data-z-index="0.1" opacity="1" transform="translate(10,46) scale(1 1)" clip-path="none">
                                        </g>
                                        <g class="highcharts-series highcharts-series-3 highcharts-bar-series highcharts-color-3 highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(10,46) rotate(90 7 296) scale(-1 1)" clip-path="url(#highcharts-kem1pvk-2-)">
                                            <path fill="#DDDF00" d="M 64.5 182.5 L 93.5 182.5 A 3 3 0 0 1 96.5 185.5 L 96.5 303.5 A 0 0 0 0 1 96.5 303.5 L 61.5 303.5 A 0 0 0 0 1 61.5 303.5 L 61.5 185.5 A 3 3 0 0 1 64.5 182.5 Z" stroke="#ffffff" stroke-width="1" opacity="1" filter="none" class="highcharts-point highcharts-color-3"></path>
                                        </g>
                                        <g class="highcharts-markers highcharts-series-3 highcharts-bar-series highcharts-color-3" data-z-index="0.1" opacity="1" transform="translate(10,46) scale(1 1)" clip-path="none">
                                        </g>
                                    </g><text x="162" text-anchor="middle" class="highcharts-title" data-z-index="4" style="font-size: 1.2em; color: rgb(51, 51, 51); font-weight: bold; fill: rgb(51, 51, 51);" y="25">Survei Kepuasan</text><text x="162" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color: rgb(102, 102, 102); font-size: 0.8em; fill: rgb(102, 102, 102);" y="45"></text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4" style="color: rgb(102, 102, 102); font-size: 0.8em; fill: rgb(102, 102, 102);" y="397"></text>
                                    <g class="highcharts-data-labels highcharts-series-0 highcharts-bar-series highcharts-color-0 highcharts-tracker" data-z-index="6" opacity="1" transform="translate(10,46) scale(1 1)">
                                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" filter="none" transform="translate(242,69)"><text x="5" data-z-index="1" y="16" style="color: rgb(0, 0, 0); font-size: 0.7em; font-weight: bold; fill: rgb(0, 0, 0);">
                                                <tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">2<tspan x="5" dy="0">​</tspan>
                                                </tspan>2
                                            </text></g>
                                    </g>
                                    <g class="highcharts-data-labels highcharts-series-1 highcharts-bar-series highcharts-color-1 highcharts-tracker" data-z-index="6" opacity="1" transform="translate(10,46) scale(1 1)">
                                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" filter="none" transform="translate(242,112)"><text x="5" data-z-index="1" y="16" style="color: rgb(0, 0, 0); font-size: 0.7em; font-weight: bold; fill: rgb(0, 0, 0);">
                                                <tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">2<tspan x="5" dy="0">​</tspan>
                                                </tspan>2
                                            </text></g>
                                    </g>
                                    <g class="highcharts-data-labels highcharts-series-2 highcharts-bar-series highcharts-color-2 highcharts-tracker" data-z-index="6" opacity="1" transform="translate(10,46) scale(1 1)">
                                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-2" data-z-index="1" filter="none" transform="translate(121,156)"><text x="5" data-z-index="1" y="16" style="color: rgb(0, 0, 0); font-size: 0.7em; font-weight: bold; fill: rgb(0, 0, 0);">
                                                <tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1<tspan x="5" dy="0">​</tspan>
                                                </tspan>1
                                            </text></g>
                                    </g>
                                    <g class="highcharts-data-labels highcharts-series-3 highcharts-bar-series highcharts-color-3 highcharts-tracker" data-z-index="6" opacity="1" transform="translate(10,46) scale(1 1)">
                                        <g class="highcharts-label highcharts-data-label highcharts-data-label-color-3" data-z-index="1" filter="none" transform="translate(121,199)"><text x="5" data-z-index="1" y="16" style="color: rgb(0, 0, 0); font-size: 0.7em; font-weight: bold; fill: rgb(0, 0, 0);">
                                                <tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">1<tspan x="5" dy="0">​</tspan>
                                                </tspan>1
                                            </text></g>
                                    </g>
                                    <g class="highcharts-legend highcharts-no-tooltip" data-z-index="7" transform="translate(201,260)">
                                        <rect fill="#FFFFFF" class="highcharts-legend-box" rx="0" ry="0" stroke="#999999" stroke-width="0" filter="url(#highcharts-drop-shadow-0)" x="0" y="0" width="111" height="87"></rect>
                                        <g data-z-index="1">
                                            <g>
                                                <g class="highcharts-legend-item highcharts-bar-series highcharts-color-0 highcharts-series-0" data-z-index="1" transform="translate(8,3)"><text x="21" text-anchor="start" data-z-index="2" style="color: rgb(51, 51, 51); cursor: pointer; font-size: 0.8em; text-decoration: none; fill: rgb(51, 51, 51);" y="17">Sangat Puas</text>
                                                    <rect x="2" y="6" rx="6" ry="6" width="12" height="12" fill="#058DC7" class="highcharts-point" data-z-index="3"></rect>
                                                </g>
                                                <g class="highcharts-legend-item highcharts-bar-series highcharts-color-1 highcharts-series-1" data-z-index="1" transform="translate(8,22)"><text x="21" y="17" text-anchor="start" data-z-index="2" style="color: rgb(51, 51, 51); cursor: pointer; font-size: 0.8em; text-decoration: none; fill: rgb(51, 51, 51);">Puas</text>
                                                    <rect x="2" y="6" rx="6" ry="6" width="12" height="12" fill="#50B432" class="highcharts-point" data-z-index="3"></rect>
                                                </g>
                                                <g class="highcharts-legend-item highcharts-bar-series highcharts-color-2 highcharts-series-2" data-z-index="1" transform="translate(8,41)"><text x="21" y="17" text-anchor="start" data-z-index="2" style="color: rgb(51, 51, 51); cursor: pointer; font-size: 0.8em; text-decoration: none; fill: rgb(51, 51, 51);">Tidak
                                                        Puas</text>
                                                    <rect x="2" y="6" rx="6" ry="6" width="12" height="12" fill="#ED561B" class="highcharts-point" data-z-index="3"></rect>
                                                </g>
                                                <g class="highcharts-legend-item highcharts-bar-series highcharts-color-3 highcharts-series-3" data-z-index="1" transform="translate(8,60)"><text x="21" y="17" text-anchor="start" data-z-index="2" style="color: rgb(51, 51, 51); cursor: pointer; font-size: 0.8em; text-decoration: none; fill: rgb(51, 51, 51);">Kurang
                                                        Puas</text>
                                                    <rect x="2" y="6" rx="6" ry="6" width="12" height="12" fill="#DDDF00" class="highcharts-point" data-z-index="3"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="13.562500000000004" style="color: rgb(51, 51, 51); cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" text-anchor="middle" transform="translate(0,0)" y="362" opacity="1">0</text><text x="70.6" style="color: rgb(51, 51, 51); cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" text-anchor="middle" transform="translate(0,0)" y="362" opacity="1">0.5</text><text x="131.2" style="color: rgb(51, 51, 51); cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" text-anchor="middle" transform="translate(0,0)" y="362" opacity="1">1</text><text x="191.8" style="color: rgb(51, 51, 51); cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" text-anchor="middle" transform="translate(0,0)" y="362" opacity="1">1.5</text><text x="252.4" style="color: rgb(51, 51, 51); cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" text-anchor="middle" transform="translate(0,0)" y="362" opacity="1">2</text><text x="304.1015625" style="color: rgb(51, 51, 51); cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" text-anchor="middle" transform="translate(0,0)" y="362" opacity="1">2.5</text></g>
                                    <g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"></g>
                                    <g class="highcharts-label highcharts-tooltip highcharts-color-1" data-z-index="8" filter="url(#highcharts-drop-shadow-0)" style="cursor: default; pointer-events: none;" transform="translate(134,148)" opacity="0" visibility="hidden">
                                        <path fill="#ffffff" class="highcharts-label-box highcharts-tooltip-box" d="M 3 0 L 109 0 A 3 3 0 0 1 112 3 L 112 15 L 118 21 L 112 27 L 112 40 A 3 3 0 0 1 109 43 L 3 43 A 3 3 0 0 1 0 40 L 0 3 A 3 3 0 0 1 3 0 Z" stroke-width="0" stroke="#50B432"></path><text x="8" data-z-index="1" y="18" style="color: rgb(51, 51, 51); font-size: 0.8em; fill: rgb(51, 51, 51);">
                                            <tspan style="font-size: 0.8em;">Survei</tspan>
                                            <tspan class="highcharts-br" dy="15" x="8">​</tspan>
                                            <tspan style="color: rgb(80, 180, 50); fill: rgb(80, 180, 50);">●</tspan> Puas: <tspan style="font-weight: bold;">2 Orang</tspan>
                                            <tspan class="highcharts-br">​</tspan>
                                        </text>
                                    </g>
                                </svg></div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Informasi-4 -->
</div>