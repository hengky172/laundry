<div class="container">
    <div class="table-head row my-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Cek Laundry</h3>
            </div>
        </div>
        <hr>
        <form method="post" action="<?= base_url() ?>cek_laundry">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-10">
                        <input type="text" name="kode_transaksi" class="form-control" placeholder="Masukan Kode Transaksi Anda!">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-outline-info" style="margin-top: 0px;">Cek Laundry</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="table-head row my-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Jenis Paket</h3>
            </div>
        </div>
        <hr>
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>Nama Konsumen</th>
                            <th>Tanggal Masuk</th>
                            <th>Paket</th>
                            <th>Total</th>
                            <th>Status Pembayaran</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($data)) {
                            foreach ($data as $row) { ?>
                                <tr>
                                    <td><?= $row->nama_konsumen; ?></td>
                                    <td><?= $row->tgl_masuk; ?></td>
                                    <td><?= $row->nama_paket; ?></td>
                                    <td><?= "Rp. " . number_format($row->grand_total, 0, '.', '.'); ?></td>
                                    <td><?= $row->bayar; ?></td>
                                    <td><?= $row->status; ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="6" class="bg-danger text-danger">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>