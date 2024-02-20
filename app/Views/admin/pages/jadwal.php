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
                                        <th>Acara</th>
                                        <th>Hari</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Tempat</th>
                                        <th>Kategori</th>
                                        <th>Tanggal Input</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftar_jadwal as $jadwal) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $jadwal->nama_jadwal ?></td>
                                            <td><?= $jadwal->hari_jadwal ?></td>
                                            <td><?= $jadwal->tanggal_jadwal ?></td>
                                            <td><?= $jadwal->jam_jadwal ?></td>
                                            <td><?= $jadwal->tempat_jadwal ?></td>
                                            <td><?= $jadwal->slug_jadwal ?></td>
                                            <td><?= $jadwal->tanggal_input ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#editModal<?= $jadwal->id_jadwal ?>"><i class="fas fa-edit"></i>Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm mt2 mb-2" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $jadwal->id_jadwal ?>"><i class="fas fa-trash"></i>Hapus</button>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jadwal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('jadwal/tambah'); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nama_jadwal">Nama Acara </label>
                            <input type="text" name="nama_jadwal" id="nama_jadwal" class="form-control" required>

                            <label for="hari_jadwal">Hari </label>
                            <input type="text" name="hari_jadwal" id="hari_jadwal" class="form-control" required>

                            <label for="tanggal_jadwal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal_jadwal" name="tanggal_jadwal" required></input>

                            <label for="jam_jadwal">Jam </label>
                            <input type="time" name="jam_jadwal" id="jam_jadwal" class="form-control" required>

                            <label for="tempat_jadwal">Tempat</label>
                            <input type="text" name="tempat_jadwal" id="tempat_jadwal" class="form-control" required>

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
    <?php foreach ($daftar_jadwal as $jadwal) : ?>
        <div class="modal fade" id="editModal<?= $jadwal->id_jadwal ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit jadwal</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('jadwal/edit/' . $jadwal->id_jadwal); ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="PUT">
                            <div class="mb-3">
                                <label for="nama_jadwal">Nama Acara </label>
                                <input type="text" name="nama_jadwal" id="nama_jadwal" class="form-control" value="<?= $jadwal->nama_jadwal ?>" required>

                                <label for="hari_jadwal">Hari </label>
                                <input type="text" name="hari_jadwal" id="hari_jadwal" class="form-control" value="<?= $jadwal->hari_jadwal ?>" required>

                                <label for="tanggal_jadwal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal_jadwal" name="tanggal_jadwal" value="<?= $jadwal->tanggal_jadwal ?>" required></input>

                                <label for="jam_jadwal">Jam </label>
                                <input type="time" name="jam_jadwal" id="jam_jadwal" class="form-control" value="<?= $jadwal->jam_jadwal ?>" required>

                                <label for="tempat_jadwal">Tempat</label>
                                <input type="text" name="tempat_jadwal" id="tempat_jadwal" class="form-control" value="<?= $jadwal->tempat_jadwal ?>" required>
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
    <?php foreach ($daftar_jadwal as $jadwal) : ?>
        <div class="modal fade" id="hapusModal<?= $jadwal->id_jadwal ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus jadwal</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('jadwal/hapus/' . $jadwal->id_jadwal); ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="mb-3">
                                <!-- <input type="hidden" name="_DELETE"> -->
                                <p> Apakah anda yakin untuk menghapus jadwal <?= ' "', $jadwal->nama_jadwal, '" '  ?> ini ?</p>
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