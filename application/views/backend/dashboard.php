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

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="rounded-circle" width="30" src="<?= base_url() ?>assets/img/profile.jpg"> Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profile.html">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end nav -->
            <!-- content -->
            <?php $this->load->view($content) ?>
            <!-- end content -->
        </div>
        <!-- footer -->
        <?php $this->load->view('backend/footer') ?>
        <!-- end footer -->