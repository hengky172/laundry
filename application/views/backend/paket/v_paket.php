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
                <h3 class="left">Daftar Paket</h3>
                <a href="<?= base_url() ?>paket/tambah" class="right btn btn-outline-primary"><i class="fas fa-plus"></i> Tambah</a>
            </div>
        </div>
        <hr>
        <div class="col-lg-12 table-body">
            <div class="table-responsive">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Paket</th>
                            <th>Nama Paket</th>
                            <th>Harga Paket</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $row) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row->kode_paket ?></td>
                                <td><?= $row->nama_paket; ?></td>
                                <td><?= "Rp. " . number_format($row->harga_paket, 0, '.', '.'); ?></td>
                                <td>
                                    <a href="<?= base_url() ?>paket/edit/<?= $row->kode_paket; ?>" class="btn btn-outline-success"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="<?= base_url() ?>paket/delete/<?= $row->kode_paket; ?>" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ???');"><i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
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