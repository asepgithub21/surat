<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Surat Masuk</h1>
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
            <form role="form" action="<?= base_url; ?>/surat_masuk/updateSurat" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_suratmasuk" value="<?= $data['surat_masuk']['id_suratmasuk']; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>Asal Surat</label>
                        <input type="text" class="form-control" placeholder="masukkan Asal Surat..." name="asal_surat" value="<?= $data['surat_masuk']['asal_surat']; ?>">

                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" placeholder="masukkan Nomor Surat..." name="nomor_surat" value="<?= $data['surat_masuk']['nomor_surat']; ?>">

                        <label>Tanggal Surat</label>
                        <input type="text" class="form-control" placeholder="masukkan Tanggal Surat..." name="tanggal_surat" value="<?= $data['surat_masuk']['tanggal_surat']; ?>">
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