<div class="container-fluid px-4">
    <div class="table-head row my-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
        <div class="row">
            <div class="col-md-12">
                <h3 class="left"><?= $judul; ?></h3>
            </div>
        </div>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= base_url() ?>laporan/cetak_laporan" method="post" class="form-user">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            Tanggal Mulai
                        </label>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal_mulai" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            Tanggal Akhir
                        </label>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal_akhir" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>