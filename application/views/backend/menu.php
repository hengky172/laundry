<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <title>My Laundry</title>
</head>

<body>

    <div class="d-flex" id="wrapper">
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                MyLaundry
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="<?= base_url(); ?>dashboard" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-bars me-2"></i> Dashboard
                </a>
                <a href="paket.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-archive me-2"></i> Daftar Paket
                </a>
                <a href="<?= base_url(); ?>konsumen" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-server me-2"></i> Data Konsumen
                </a>
                <a href="karyawan.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-server me-2"></i> Data Transaksi
                </a>
                <a href="report.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-info-circle me-2"></i> Report
                </a>
                <a href="profile.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-cogs"></i> Setting
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </a>
            </div>
        </div>