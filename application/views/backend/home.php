<div class="container-fluid px-4">
    <div class="row g-3 my-2">
        <div class="col-md-4">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <p class="fs-5">Total Konsumen</p>
                    <h5 class="fs-2"><?= $total_konsumen; ?></h5>
                </div>
                <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <p class="fs-5">Transaksi Baru</p>
                    <h5 class="fs-2"><?= $transaksi_baru; ?></h5>
                </div>
                <i class="fas fa-cart-plus fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <p class="fs-5">Data Transaksi</p>
                    <h5 class="fs-2"><?= $total_transaksi; ?></h5>
                </div>
                <i class="fas fa-chart-pie fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
    </div>
</div>