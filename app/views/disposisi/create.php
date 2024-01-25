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
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url; ?>/disposisi/simpandisposisi" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Asal Surat</label>
                        <select class="form-control" name="dari">
                            <option value="">Pilih</option>
                            <?php foreach ($data['surat_masuk'] as $row) : ?>
                                <option value="<?= $row['id']; ?>"><?= $row['asal_surat']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Surat</label>
                        <input type="date" class="form-control" placeholder="masukkan Tanggal Surat..." name="tgl_surat">
                    </div>
                    <div class="form-group">
                        <label>Nomor Surat</label>
                        <select class="form-control" name="nomor_surat_id">
                            <option value="">Pilih</option>
                            <?php foreach ($data['surat_masuk'] as $row) : ?>
                                <option value="<?= $row['id']; ?>"><?= $row['nomor_surat']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Perihal</label>
                        <input type="text" class="form-control" placeholder="masukkan Perihal..." name="perihal">
                    </div>
                    <div class="form-group">
                        <label>Tanggal di Terima</label>
                        <input type="date" class="form-control" placeholder="masukkan Tanggal di Terima..." name="tgl_diterima">
                    </div>
                    <div class="form-group">
                        <label>Nomor Agenda</label>
                        <input type="text" class="form-control" placeholder="masukkan Nomor Agenda..." name="nmr_agenda">
                    </div>
                    <div class="form-group">
                        <label>Diteruskan Kepada</label>
                        <input type="text" class="form-control" placeholder="masukkan  Diteruskan Kepada..." name="diteruskan">
                    </div>
                    <div class="form-group">
                        <label>Disposisi</label>
                        <input type="text" class="form-control" placeholder="masukkan Disposisi..." name="disposisi">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->