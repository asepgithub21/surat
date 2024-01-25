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
            <form role="form" action="<?= base_url; ?>/surat_keluar/simpansurat" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" placeholder="masukkan Nomor Surat..." name="nmr_surat">
                    </div>
                    <div class="form-group">
                        <label>tanggal Surat Keluar</label>
                        <input type="date" class="form-control" placeholder="masukkan Tanggal Surat Keluar..." name="tgl_suratkeluar">
                    </div>
                    <div class="form-group">
                        <label>Perihal</label>
                        <input type="text" class="form-control" placeholder="masukkan Perihal..." name="perihal">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Tujuan Surat</label>
                            <input type="text" class="form-control" placeholder="masukkan Tujuan Surat..." name="tujuan_surat">
                        </div>
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