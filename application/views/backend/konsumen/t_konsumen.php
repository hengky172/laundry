<div class="container-fluid px-4">
    <div class="table-head row my-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
        <div class="row">
            <div class="col-md-12">
                <h3 class="center"><?= $judul; ?></h3>
            </div>
            <hr>
            <div class="col-lg-12" style="text-align: left;">
                <form action="<?= base_url() ?>konsumen/simpan" method="post">
                    <div class="mb-3">
                        <label class="form-label">Kode Konsumen</label>
                        <input type="text" name="kode_konsumen" value="<?= $kode_konsumen; ?>" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Konsumen</label>
                        <input type="text" name="nama_konsumen" class="form-control" placeholder="Input Nama Konsumen" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Konsumen</label>
                        <div class="form-floating">
                            <textarea class="form-control" name="alamat_konsumen" style="height: 100px" required></textarea>
                            <label>Alamat</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Telepon (WA)</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Input No. Telpon (WA)" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url() ?>konsumen" class="btn btn-danger">batal</a>
                    </div>
                </form>
            </div>
        </div>