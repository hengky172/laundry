<div class="container-fluid px-4">
    <?php if (!empty($this->session->flashdata('info'))) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> <?= $this->session->flashdata('info'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <div class="table-head row my-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
        <div class="row">
            <div class="col-md-12">
                <h3 class="left">Data Konsumen</h3>
                <a href="<?= base_url() ?>konsumen/tambah" class="right btn btn-outline-primary"><i class="fas fa-plus"></i> Tambah</a>
            </div>
        </div>
        <hr>
        <div class="col-lg-12 table-body">
            <div class="table-responsive">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode</th>
                            <th>Nama Konsumen</th>
                            <th>Alamat</th>
                            <th>Telpon(WA)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $row) { ?>
                            <tr>
                                <th><?= $no++; ?></th>
                                <td><?= $row->kode_konsumen; ?></td>
                                <td><?= $row->nama_konsumen; ?></td>
                                <td><?= $row->alamat_konsumen; ?></td>
                                <td><?= $row->no_telp; ?></td>
                                <td>
                                    <button type="button" class="btn btn-outline-success"><i class="fas fa-edit"></i> Edit</button>
                                    <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
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