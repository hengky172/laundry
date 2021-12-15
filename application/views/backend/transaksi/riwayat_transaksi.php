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
                                <td><?= $row->status; ?></td>
                                <td>
                                    <a href="<?= base_url() ?>transaksi/edit_transaksi/<?= $row->kode_transaksi; ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="<?= base_url() ?>transaksi/detail_transaksi/<?= $row->kode_transaksi; ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                                </td>
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