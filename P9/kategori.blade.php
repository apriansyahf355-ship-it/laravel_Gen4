<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Kategori | Tugas09_Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <style>
        body{font-family:'Segoe UI',sans-serif}
        .main-sidebar{background-color:#1a1a2e!important}
        .brand-link{background-color:#FF2D20!important;border-bottom:1px solid rgba(0,0,0,.2)}
        .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active{background:rgba(255,45,32,.2)!important;color:#fff!important}
        .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link:hover{background:rgba(255,255,255,.07)!important;color:#fff!important}
        .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link{color:#c2c7d0}
        .main-header.navbar{background-color:#FF2D20;border-bottom:none}
        .main-header .nav-link,.main-header .navbar-brand{color:#fff!important}
        .card-custom{border:none;box-shadow:0 2px 12px rgba(0,0,0,.08);border-radius:10px;overflow:hidden}
        .card-custom .card-header{background:#1a1a2e;color:#fff;border:none;padding:14px 20px}
        .card-custom .card-header .card-title{color:#fff;font-weight:600}
        .card-custom .card-header i{color:#FF2D20}
        .table thead th{background:#f8f9fa;font-size:.78rem;text-transform:uppercase;letter-spacing:.5px;color:#555;border-top:none}
        .table tbody tr:hover{background:#fffafa}
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a></li>
            <li class="nav-item d-none d-sm-inline-block">
                <span class="nav-link font-weight-bold">PeTIK II Jombang &mdash; YBM PLN</span>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link text-center">
            <span class="brand-text font-weight-bold"><i class="fab fa-laravel mr-1"></i> Stok Barang</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-header" style="color:#555;font-size:.7rem;letter-spacing:.8px;">MASTER DATA</li>
                    <li class="nav-item"><a href="/barang" class="nav-link"><i class="nav-icon fas fa-boxes"></i><p>Barang</p></a></li>
                    <li class="nav-item"><a href="/kategori" class="nav-link active"><i class="nav-icon fas fa-tags"></i><p>Kategori</p></a></li>
                    <li class="nav-item"><a href="/satuan" class="nav-link"><i class="nav-icon fas fa-ruler"></i><p>Satuan</p></a></li>
                    <li class="nav-item"><a href="/supplier" class="nav-link"><i class="nav-icon fas fa-truck"></i><p>Supplier</p></a></li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6"><h1 class="m-0">Data Kategori</h1></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kategori</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-custom">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tags mr-2"></i>Daftar Kategori Barang</h3>
                                <div class="card-tools">
                                    <span class="badge badge-danger badge-pill">{{ $kategoris->count() }} Kategori</span>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-hover table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th width="60">#</th>
                                            <th>Nama Kategori</th>
                                            <th>Deskripsi</th>
                                            <th width="140" class="text-center">Jumlah Barang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($kategoris as $i => $k)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td><strong>{{ $k->nama_kategori }}</strong></td>
                                            <td class="text-muted">{{ $k->deskripsi ?? '-' }}</td>
                                            <td class="text-center"><span class="badge badge-danger">{{ $k->barangs_count }}</span></td>
                                        </tr>
                                        @empty
                                        <tr><td colspan="4" class="text-center text-muted py-4">Belum ada data.</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <strong>&copy; {{ date('Y') }} <a href="#" style="color:#FF2D20;">PeTIK II Jombang</a> &middot; YBM PLN</strong>
        <div class="float-right d-none d-sm-inline-block"><b>Tugas09_Laravel</b></div>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
</body>
</html>
