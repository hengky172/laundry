<div class="container-fluid px-4">
    <div class="table-head row my-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
        <div class="row">
            <div class="col-md-12">
                <h3 class="center"><?= $judul; ?></h3>
            </div>
            <hr>
            <div class="col-lg-12" style="text-align: left;">
                <form action="<?= base_url() ?>paket/update" method="post">
                    <div class="mb-3">
                        <label class="form-label">Kode Paket</label>
                        <input type="text" name="kode_paket" value="<?= $data['kode_paket']; ?>" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Paket</label>
                        <input type="text" name="nama_paket" value="<?= $data['nama_paket']; ?>" class="form-control" placeholder="Input Nama Paket" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Paket</label>
                        <input type="number" name="harga_paket" value="<?= $data['harga_paket']; ?>" class="form-control" placeholder="Input Harga Paket" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <a href="<?= base_url() ?>paket" class="btn btn-danger">batal</a>
                    </div>
                </form>
            </div>
        </div>