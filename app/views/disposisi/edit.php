<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Disposisi</h1>
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
            <form role="form" action="<?= base_url; ?>/disposisi/updateSurat" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['disposisi']['id']; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>Asal Surat</label>
                        <input type="text" class="form-control" placeholder="masukkan Dari..." name="dari" value="<?= $data['disposisi']['dari']; ?>">

                        <label>Tanggal Surat</label>
                        <input type="date" class="form-control" placeholder="masukkan Tanggal Surat..." name="tgl_surat" value="<?= $data['disposisi']['tgl_surat']; ?>">

                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" placeholder="masukkan Nomor Surat..." name="nomor_surat_id" value="<?= $data['disposisi']['nomor_surat_id']; ?>">

                        <label>Perihal</label>
                        <input type="text" class="form-control" placeholder="masukkan Perihal..." name="perihal" value="<?= $data['disposisi']['perihal']; ?>">

                        <label>Tanggal di Terima</label>
                        <input type="date" class="form-control" placeholder="masukkan Tanggal di Terima..." name="tgl_diterima" value="<?= $data['disposisi']['tgl_diterima']; ?>">

                        <label>Nomor Agenda</label>
                        <input type="text" class="form-control" placeholder="masukkan Nomor Agenda..." name="nmr_agenda" value="<?= $data['disposisi']['nmr_agenda']; ?>">

                        <label>Diteruskan Kepada</label>
                        <input type="text" class="form-control" placeholder="masukkan Diteruskan..." name="diteruskan" value="<?= $data['disposisi']['diteruskan']; ?>">

                        <label>Disposisi</label>
                        <input type="text" class="form-control" placeholder="masukkan Disposisi..." name="disposisi" value="<?= $data['disposisi']['disposisi']; ?>">

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