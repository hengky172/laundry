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
                            <th>No.</th>
                            <th>Nama Paket</th>
                            <th>Harga Paket</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($paket as $row) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row->nama_paket; ?></td>
                                <td><?= "Rp. " . number_format($row->harga_paket, 0, '.', '.'); ?></td>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>