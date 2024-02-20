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
                            Agenda
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
                                    <?php foreach ($daftar_agenda as $agenda) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $agenda->nama_agenda ?></td>
                                            <td><?= $agenda->hari_agenda ?></td>
                                            <td><?= $agenda->tanggal_agenda ?></td>
                                            <td><?= $agenda->jam_agenda ?></td>
                                            <td><?= $agenda->tempat_agenda ?></td>
                                            <td><?= $agenda->slug_agenda ?></td>
                                            <td><?= $agenda->tanggal_input ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#editModal<?= $agenda->id_agenda ?>"><i class="fas fa-edit"></i>Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm mt2 mb-2" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $agenda->id_agenda ?>"><i class="fas fa-trash"></i>Hapus</button>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Agenda</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('agenda/tambah'); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nama_agenda">Nama Acara </label>
                            <input type="text" name="nama_agenda" id="nama_agenda" class="form-control" required>

                            <label for="hari_agenda">Hari </label>
                            <input type="text" name="hari_agenda" id="hari_agenda" class="form-control" required>

                            <label for="tanggal_agenda">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal_agenda" name="tanggal_agenda" required></input>

                            <label for="jam_agenda">Jam </label>
                            <input type="time" name="jam_agenda" id="jam_agenda" class="form-control" required>

                            <label for="tempat_agenda">Tempat</label>
                            <input type="text" name="tempat_agenda" id="tempat_agenda" class="form-control" required>

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
    <?php foreach ($daftar_agenda as $agenda) : ?>
        <div class="modal fade" id="editModal<?= $agenda->id_agenda ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Agenda</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agenda/edit/' . $agenda->id_agenda); ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="PUT">
                            <div class="mb-3">
                                <label for="nama_agenda">Nama Acara </label>
                                <input type="text" name="nama_agenda" id="nama_agenda" class="form-control" value="<?= $agenda->nama_agenda ?>" required>

                                <label for="hari_agenda">Hari </label>
                                <input type="text" name="hari_agenda" id="hari_agenda" class="form-control" value="<?= $agenda->hari_agenda ?>" required>

                                <label for="tanggal_agenda">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal_agenda" name="tanggal_agenda" value="<?= $agenda->tanggal_agenda ?>" required></input>

                                <label for="jam_agenda">Jam </label>
                                <input type="time" name="jam_agenda" id="jam_agenda" class="form-control" value="<?= $agenda->jam_agenda ?>" required>

                                <label for="tempat_agenda">Tempat</label>
                                <input type="text" name="tempat_agenda" id="tempat_agenda" class="form-control" value="<?= $agenda->tempat_agenda ?>" required>
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
    <?php foreach ($daftar_agenda as $agenda) : ?>
        <div class="modal fade" id="hapusModal<?= $agenda->id_agenda ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Agenda</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agenda/hapus/' . $agenda->id_agenda); ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="mb-3">
                                <!-- <input type="hidden" name="_DELETE"> -->
                                <p> Apakah anda yakin untuk menghapus Agenda <?= ' "', $agenda->nama_agenda, '" '  ?> ini ?</p>
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