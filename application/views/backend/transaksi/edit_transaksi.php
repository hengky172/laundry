<?php
date_default_timezone_set('Asia/Jakarta');
$tgl_masuk = date('Y-m-d h:i:s');
?>
<?php if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> <?= $this->session->flashdata('info'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>
<div class="container-fluid px-4">
    <div class="table-head row my-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
        <div class="row">
            <div class="col-md-12">
                <h3 class="center"><?= $judul; ?></h3>
            </div>
            <hr>
            <div class="col-lg-12" style="text-align: left;">
                <form action="<?= base_url() ?>transaksi/update" method="post">
                    <div class="mb-3">
                        <label class="form-label">Kode Transaksi</label>
                        <input type="text" name="kode_transaksi" value="<?= $transaksi['kode_transaksi']; ?>" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Konsumen</label>
                        <select name="kode_konsumen" class="form-control" required>
                            <?php foreach ($konsumen as $kons) {
                                if ($transaksi['kode_konsumen'] == $kons->kode_konsumen) { ?>
                                    <option value="<?= $kons->kode_konsumen; ?>" selected> <?= $kons->nama_konsumen; ?></option>
                                <?php } else { ?>
                                    <option value="<?= $kons->kode_konsumen; ?>"> <?= $kons->nama_konsumen; ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Paket</label>
                        <select name="kode_paket" id="paket" class="form-control" required>
                            <?php foreach ($paket as $pkt) {
                                if ($transaksi['kode_paket'] == $pkt->kode_paket) { ?>
                                    <option value="<?= $pkt->kode_paket; ?>" selected> <?= $pkt->nama_paket; ?></option>
                                <?php } else { ?>
                                    <option value="<?= $pkt->kode_paket; ?>"> <?= $pkt->nama_paket; ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Paket</label>
                        <input type="text" id="harga" value="<?= $transaksi['harga_paket']; ?>" class="form-control" placeholder="Harga Paket" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Berat (kg)</label>
                        <input type="number" name="berat" id="berat" value="<?= $transaksi['berat']; ?>" class="form-control" placeholder="Berat (KG)">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total</label>
                        <input type="text" name="grand_total" id="grand_total" value="<?= $transaksi['grand_total']; ?>" class="form-control" placeholder="Total Harga" readonly>
                    </div>
                    <div class="mb-3" hidden>
                        <label class="form-label">Tanggal Masuk</label>
                        <input type="text" name="tgl_masuk" value="<?= $tgl_masuk; ?>" class="form-control" placeholder="Tanggal Masuk" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Bayar</label>
                        <select name="bayar" class="form-control">
                            <?php
                            if ($transaksi['bayar'] == "Lunas") { ?>
                                <option value="Lunas" selected>Lunas</option>
                                <option value="Belum Lunas">Belum Lunas</option>
                            <?php } else { ?>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum Lunas" selected>Belum Lunas</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3" hidden>
                        <label class="form-label">Status</label>
                        <input type="text" name="status" value="Baru" class="form-control" placeholder="Status" readonly>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <a href="<?= base_url() ?>transaksi/riwayat" class="btn btn-danger">batal</a>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $('#paket').change(function() {
                let kode_paket = $(this).val();

                $.ajax({
                    url: '<?= base_url() ?>transaksi/getHargaPaket',
                    data: {
                        kode_paket: kode_paket
                    },
                    method: 'post',
                    dataType: 'JSON',
                    success: function(hasil) {
                        $('#harga').val(hasil.harga_paket);
                    }
                });
            });

            $('#berat').keyup(function() {
                let berat = $(this).val();
                let harga = document.getElementById('harga').value;
                $('#grand_total').val(berat * harga);
            });
        </script>