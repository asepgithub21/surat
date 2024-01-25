<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Surat Keluar</h1>
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
            <form role="form" action="<?= base_url; ?>/surat_keluar/updateSurat" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['surat_keluar']['id']; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" placeholder="masukkan Nomor Surat..." name="nmr_surat" value="<?= $data['surat_keluar']['nmr_surat']; ?>">

                        <label>Tanggal Surat</label>
                        <input type="date" class="form-control" placeholder="masukkan Tanggal Surat..." name="tgl_suratkeluar" value="<?= $data['surat_keluar']['tgl_suratkeluar']; ?>">

                        <label>Tanggal Surat</label>
                        <input type="text" class="form-control" placeholder="masukkan Perihal..." name="perihal" value="<?= $data['surat_keluar']['perihal']; ?>">

                        <label>Tujuan Surat</label>
                        <input type="text" class="form-control" placeholder="masukkan Tujuan Surat..." name="tujuan_surat" value="<?= $data['surat_keluar']['tujuan_surat']; ?>">
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