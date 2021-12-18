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
                <h3 class="left"><?= $judul; ?></h3>
            </div>
        </div>
        <hr>
        <div class="col-lg-12 table-body">
            <div class="table-responsive">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Masuk</th>
                            <th>Kode Transaksi</th>
                            <th>Konsumen</th>
                            <th>Paket</th>
                            <th>Berat (Kg)</th>
                            <th>Grand Total</th>
                            <th>Tanggal Ambil</th>
                            <th>Status Pembayaran</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $row) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row->tgl_masuk; ?></td>
                                <td><?= $row->kode_transaksi; ?></td>
                                <td><?= $row->nama_konsumen; ?></td>
                                <td><?= $row->nama_paket; ?></td>
                                <td><?= $row->berat; ?></td>
                                <td><?= "Rp. " . number_format($row->grand_total, 0, '.', '.'); ?></td>
                                <td><?= $row->tgl_ambil; ?></td>
                                <td><?= $row->bayar; ?></td>
                                <td>
                                    <?php
                                    if ($row->status == "Baru") { ?>
                                        <select name="status" class="badge bg-danger status">
                                            <option value="<?= $row->kode_transaksi ?>Baru" selected>Baru</option>
                                            <option value="<?= $row->kode_transaksi ?>Proses">Proses</option>
                                            <option value="<?= $row->kode_transaksi ?>Selesai">Selesai</option>
                                        </select>
                                    <?php } else if ($row->status == "Proses") { ?>
                                        <select name="status" class="badge bg-warning status">
                                            <option value="<?= $row->kode_transaksi ?>Baru">Baru</option>
                                            <option value="<?= $row->kode_transaksi ?>Proses" selected>Proses</option>
                                            <option value="<?= $row->kode_transaksi ?>Selesai">Selesai</option>
                                        </select>

                                    <?php } else { ?>
                                        <button class="btn btn-success btn-sm dropdown-toggle">Selesai</button>
                                    <?php } ?>
                                </td>
                                <?php
                                if ($row->status == "Selesai") { ?>
                                    <td>
                                        <a href="<?= base_url() ?>transaksi/detail/<?= $row->kode_transaksi; ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                                    </td>
                                <?php } else { ?>
                                    <td>
                                        <a href="<?= base_url() ?>transaksi/edit_transaksi/<?= $row->kode_transaksi; ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="<?= base_url() ?>transaksi/detail/<?= $row->kode_transaksi; ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <nav aria-label="pagination" class="pagination">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $('.status').change(function() {
            let status = $(this).val();
            let kt = status.substr(0, 13);
            let stt = status.substr(13, 10);

            $.ajax({
                url: "<?= base_url() ?>transaksi/update_status",
                method: "post",
                data: {
                    kt: kt,
                    stt: stt
                }
            });
            location.reload();
        });
    </script>