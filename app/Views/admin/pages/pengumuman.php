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
                            Pengumuman
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
                                    <?php foreach ($daftar_pengumuman as $pengumuman) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $pengumuman->judul_pengumuman ?></td>
                                            <td><?= $pengumuman->deskripsi_pengumuman ?></td>
                                            <td><?= $pengumuman->link_pengumuman ?></td>
                                            <td><?= $pengumuman->gambar_pengumuman ?></td>
                                            <td><?= $pengumuman->slug_pengumuman ?></td>
                                            <td><?= $pengumuman->tanggal_input ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#editModal<?= $pengumuman->id_pengumuman ?>"><i class="fas fa-edit"></i>Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm mt2 mb-2" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $pengumuman->id_pengumuman ?>"><i class="fas fa-trash"></i>Hapus</button>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pengumuman</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('pengumuman/tambah'); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="judul_pengumuman">Judul </label>
                            <input type="text" name="judul_pengumuman" id="judul_pengumuman" class="form-control" required>

                            <label for="deskripsi_pengumuman">Deskripsi</label>
                            <textarea class="form-control" placeholder="Tuliskan deskripsi pengumuman disini..." id="deskripsi_pengumuman" name="deskripsi_pengumuman" style="height: 100px" required></textarea>

                            <label for="link_pengumuman">Link </label>
                            <input type="text" name="link_pengumuman" id="link_pengumuman" placeholder="Masukkan link disini..." class="form-control" required>

                            <label for="gambar_pengumuman">Gambar </label>
                            <input type="file" name="gambar_pengumuman" id="gambar_pengumuman" class="form-control" required>
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
    <?php foreach ($daftar_pengumuman as $pengumuman) : ?>
        <div class="modal fade" id="editModal<?= $pengumuman->id_pengumuman ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pengumuman</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('pengumuman/edit/' . $pengumuman->id_pengumuman); ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="PUT">
                            <div class="mb-3">
                                <label for="judul_pengumuman">Judul</label>
                                <input type="text" name="judul_pengumuman" id="judul_pengumuman" class="form-control" value="<?= $pengumuman->judul_pengumuman ?>" required>

                                <label for="deskripsi_pengumuman">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi_pengumuman" name="deskripsi_pengumuman" style="height: 100px" required> <?= $pengumuman->deskripsi_pengumuman ?> </textarea>

                                <label for="link_pengumuman">Link </label>
                                <input type="text" name="link_pengumuman" id="link_pengumuman" class="form-control" value="<?= $pengumuman->link_pengumuman ?>" required>

                                <label for="gambar_pengumuman">Gambar </label>
                                <input type="file" name="gambar_pengumuman" id="gambar_pengumuman" class="form-control" value="<?= $pengumuman->gambar_pengumuman ?>" required>
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
    <?php foreach ($daftar_pengumuman as $pengumuman) : ?>
        <div class="modal fade" id="hapusModal<?= $pengumuman->id_pengumuman ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Pengumuman</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('pengumuman/hapus/' . $pengumuman->id_pengumuman); ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="mb-3">
                                <!-- <input type="hidden" name="_DELETE"> -->
                                <p> Apakah anda yakin untuk menghapus Pengumuman <?= ' "', $pengumuman->judul_pengumuman, '" '  ?> ini ?</p>
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