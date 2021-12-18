        <!-- sidebar -->
        <?php $this->load->view('backend/menu') ?>

        <!-- end sidebar -->

        <div id="page-content-wrapper">
            <!-- nav -->
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-bars primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0"><?= $judul; ?></h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <!-- end nav -->
            <!-- content -->
            <?php $this->load->view($content) ?>
            <!-- end content -->
        </div>
        <!-- footer -->
        <?php $this->load->view('backend/footer') ?>
        <!-- end footer -->