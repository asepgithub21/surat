<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $data['title']; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <?php
                Flasher::Message();
                ?>
            </div>
        </div>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $data['title'] ?></h3>
                <div class="btn-group float-right">
                    <a href="<?= base_url; ?>/disposisi/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Disposisi</a>
                    <a href="<?= base_url; ?>/disposisi/laporan" class="btn float-right btn-xs btn btn-info" target="_blank">Laporan Disposisi</a>
                    <a href="<?= base_url; ?>/disposisi/lihatlaporan" class="btn float-right btn-xs btn btn-warning" target="_blank">Lihat Laporan Disposisi</a>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= base_url; ?>/disposisi/cari" method="post">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" name="key">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                                    <a class="btn btn-outline-danger" href="<?= base_url; ?>/disposisi">Reset</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:10px">#</th>
                            <th>Dari</th>
                            <th>Tanggal Masuk</th>
                            <th>Nomor Surat</th>
                            <th>Perihal</th>
                            <th>Tanggal Diterima</th>
                            <th>Nomor Agenda</th>
                            <th>Diteruskan</th>
                            <th>Disposisi</th>
                            <th style="width:150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php
                        foreach ($data['disposisi'] as $row) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td>
                                    <div class="badge badge-warning"><?= $row['asal_surat']; ?></div>
                                </td>
                                <td><?= $row['tgl_surat']; ?></td>
                                <td>
                                    <div class="badge badge-warning"><?= $row['nomor_surat']; ?></div>
                                </td>
                                <td><?= $row['perihal']; ?></td>
                                <td><?= $row['tgl_diterima']; ?></td>
                                <td><?= $row['nmr_agenda']; ?></td>
                                <td><?= $row['diteruskan']; ?></td>
                                <td><?= $row['disposisi']; ?></td>
                                <td>
                                    <a href="<?= base_url; ?>/disposisi/edit/<?= $row['id'] ?>" class="badge badge-info">Edit</a>
                                    <a href="<?= base_url; ?>/disposisi/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->