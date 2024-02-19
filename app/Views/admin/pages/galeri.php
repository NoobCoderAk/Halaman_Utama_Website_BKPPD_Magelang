<?= $this->extend('admin/layout/template'); ?>
<?= $this->Section('contentView'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
                </li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Galeri
                        </div>
                        <div class="card-body">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary mb-3 btn-sm" data-bs-toggle="modal" data-bs-target="#tambahModal">
                                <i class="fas fa-plus"></i>
                                Tambah
                            </button>

                            <?php if (session('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session('success') ?>
                                </div>
                            <?php endif; ?>

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Link</th>
                                        <th>Gambar</th>
                                        <th>Kategori</th>
                                        <th>Tanggal Input</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftar_galeri as $galeri) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $galeri->judul_galeri ?></td>
                                            <td><?= $galeri->deskripsi_galeri ?></td>
                                            <td><?= $galeri->link_galeri ?></td>
                                            <td><?= $galeri->gambar_galeri ?></td>
                                            <td><?= $galeri->slug_galeri ?></td>
                                            <td><?= $galeri->tanggal_input ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#editModal<?= $galeri->id_galeri ?>"><i class="fas fa-edit"></i>Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm mt2 mb-2" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $galeri->id_galeri ?>"><i class="fas fa-trash"></i>Hapus</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Galeri</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('galeri/tambah'); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="judul_galeri">Judul </label>
                            <input type="text" name="judul_galeri" id="judul_galeri" class="form-control" required>

                            <label for="deskripsi_galeri">Deskripsi</label>
                            <textarea class="form-control" placeholder="Tuliskan deskripsi carousel disini..." id="deskripsi_galeri" name="deskripsi_galeri" style="height: 100px" required></textarea>

                            <label for="link_galeri">Link </label>
                            <input type="text" name="link_galeri" id="link_galeri" placeholder="Masukkan link disini..." class="form-control" required>

                            <label for="gambar_galeri">Gambar </label>
                            <input type="file" name="gambar_galeri" id="gambar_galeri" class="form-control" required>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                    <button type="sumbit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal Edit -->
    <?php foreach ($daftar_galeri as $galeri) : ?>
        <div class="modal fade" id="editModal<?= $galeri->id_galeri ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Galeri</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('galeri/edit/' . $galeri->id_galeri); ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="PUT">
                            <div class="mb-3">
                                <label for="judul_galeri">Judul</label>
                                <input type="text" name="judul_galeri" id="judul_galeri" class="form-control" value="<?= $galeri->judul_galeri ?>" required>

                                <label for="deskripsi_galeri">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi_galeri" name="deskripsi_galeri" style="height: 100px" required> <?= $galeri->deskripsi_galeri ?> </textarea>

                                <label for="link_galeri">Link </label>
                                <input type="text" name="link_galeri" id="link_galeri" class="form-control" value="<?= $galeri->link_galeri ?>" required>

                                <label for="gambar_galeri">Gambar </label>
                                <input type="file" name="gambar_galeri" id="gambar_galeri" class="form-control" value="<?= $galeri->gambar_galeri ?>" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                        <button type="sumbit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Modal Hapus -->
    <?php foreach ($daftar_galeri as $galeri) : ?>
        <div class="modal fade" id="hapusModal<?= $galeri->id_galeri ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Galeri</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('galeri/hapus/' . $galeri->id_galeri); ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="mb-3">
                                <!-- <input type="hidden" name="_DELETE"> -->
                                <p> Apakah anda yakin untuk menghapus Galeri <?= ' "', $galeri->judul_galeri, '" '  ?> ini ?</p>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                        <button type="sumbit" class="btn btn-primary btn-sm">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?= $this->endSection(); ?>