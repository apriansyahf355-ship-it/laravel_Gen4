<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Barang | Tugas09_Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <style>
        body { font-family: 'Source Sans Pro', 'Segoe UI', sans-serif; }

        /* Sidebar */
        .main-sidebar { background-color: #1a1a2e !important; }
        .brand-link    { background-color: #FF2D20 !important; border-bottom: 1px solid rgba(0,0,0,.2); }
        .brand-link:hover { background-color: #e0261b !important; }
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active {
            background-color: rgba(255,45,32,.2) !important; color: #fff !important;
        }
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link:hover {
            background-color: rgba(255,255,255,.07) !important; color: #fff !important;
        }
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link { color: #c2c7d0; }

        /* Topbar */
        .main-header.navbar { background-color: #FF2D20; border-bottom: none; }
        .main-header .nav-link, .main-header .navbar-brand { color: #fff !important; }

        /* Card */
        .card-custom { border: none; box-shadow: 0 2px 12px rgba(0,0,0,.08); border-radius: 10px; overflow: hidden; }
        .card-custom .card-header { background: #1a1a2e; color: #fff; border: none; padding: 14px 20px; }
        .card-custom .card-header .card-title { color: #fff; font-weight: 600; }
        .card-custom .card-header i { color: #FF2D20; }

        /* Table */
        .table thead th { background: #f8f9fa; font-size: .78rem; text-transform: uppercase;
                          letter-spacing: .5px; color: #555; border-top: none; }
        .table tbody tr:hover { background-color: #fffafa; }

        /* Badges */
        .badge-stok-ok   { background: #28a745; color: #fff; }
        .badge-stok-low  { background: #ffc107; color: #212529; }
        .badge-stok-none { background: #dc3545; color: #fff; }

        /* Info boxes */
        .info-box-red .info-box-icon { background: #FF2D20; }
        .info-box-dark .info-box-icon { background: #1a1a2e; }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    {{-- ── Navbar ─────────────────────────────────── --}}
    <nav class="main-header navbar navbar-expand navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <span class="nav-link font-weight-bold">PeTIK II Jombang &mdash; YBM PLN</span>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-user mr-1"></i>Admin</a>
            </li>
        </ul>
    </nav>

    {{-- ── Sidebar ─────────────────────────────────── --}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link text-center">
            <span class="brand-text font-weight-bold">
                <i class="fab fa-laravel mr-1"></i> Stok Barang
            </span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-header" style="color:#555;font-size:.7rem;letter-spacing:.8px;">MASTER DATA</li>
                    <li class="nav-item">
                        <a href="/barang" class="nav-link active">
                            <i class="nav-icon fas fa-boxes"></i><p>Barang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/kategori" class="nav-link">
                            <i class="nav-icon fas fa-tags"></i><p>Kategori</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/satuan" class="nav-link">
                            <i class="nav-icon fas fa-ruler"></i><p>Satuan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/supplier" class="nav-link">
                            <i class="nav-icon fas fa-truck"></i><p>Supplier</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    {{-- ── Content Wrapper ─────────────────────────── --}}
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6"><h1 class="m-0">Data Barang</h1></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Barang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                {{-- ── Info Boxes ──────────────────── --}}
                <div class="row mb-3">
                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="info-box info-box-red">
                            <span class="info-box-icon elevation-1"><i class="fas fa-boxes"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Barang</span>
                                <span class="info-box-number">{{ $barangs->count() }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="info-box info-box-dark">
                            <span class="info-box-icon elevation-1"><i class="fas fa-cubes"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Stok</span>
                                <span class="info-box-number">{{ $barangs->sum('stok') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="info-box" style="border-left:4px solid #ffc107;">
                            <span class="info-box-icon elevation-1" style="background:#ffc107;">
                                <i class="fas fa-exclamation-triangle"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Stok Rendah (&lt;10)</span>
                                <span class="info-box-number">
                                    {{ $barangs->filter(fn($b) => $b->stok < 10)->count() }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="info-box" style="border-left:4px solid #28a745;">
                            <span class="info-box-icon elevation-1" style="background:#28a745;">
                                <i class="fas fa-tags"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Nilai Stok</span>
                                <span class="info-box-number" style="font-size:.95rem;">
                                    Rp {{ number_format($barangs->sum(fn($b) => $b->stok * $b->harga_jual), 0, ',', '.') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ── Main Table ───────────────────── --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card card-custom">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-boxes mr-2"></i>Daftar Data Barang
                                </h3>
                                <div class="card-tools">
                                    <span class="badge badge-danger badge-pill">
                                        {{ $barangs->count() }} Item
                                    </span>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th width="50">#</th>
                                                <th>Kode</th>
                                                <th>Nama Barang</th>
                                                <th>Kategori</th>
                                                <th>Satuan</th>
                                                <th>Supplier</th>
                                                <th class="text-center">Stok</th>
                                                <th class="text-right">Harga Beli</th>
                                                <th class="text-right">Harga Jual</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($barangs as $i => $b)
                                            <tr>
                                                <td>{{ $i + 1 }}</td>
                                                <td><code>{{ $b->kode_barang }}</code></td>
                                                <td><strong>{{ $b->nama_barang }}</strong></td>
                                                <td>
                                                    <span class="badge" style="background:#1a1a2e;color:#fff;">
                                                        {{ $b->kategori->nama_kategori }}
                                                    </span>
                                                </td>
                                                <td>{{ $b->satuan->singkatan }}</td>
                                                <td class="text-muted small">{{ $b->supplier->nama_supplier }}</td>
                                                <td class="text-center">
                                                    @if($b->stok == 0)
                                                        <span class="badge badge-stok-none">Habis</span>
                                                    @elseif($b->stok < 10)
                                                        <span class="badge badge-stok-low">{{ $b->stok }}</span>
                                                    @else
                                                        <span class="badge badge-stok-ok">{{ $b->stok }}</span>
                                                    @endif
                                                </td>
                                                <td class="text-right">
                                                    Rp {{ number_format($b->harga_beli, 0, ',', '.') }}
                                                </td>
                                                <td class="text-right font-weight-bold" style="color:#FF2D20;">
                                                    Rp {{ number_format($b->harga_jual, 0, ',', '.') }}
                                                </td>
                                                <td class="text-muted small">{{ $b->keterangan ?? '-' }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="10" class="text-center text-muted py-5">
                                                    <i class="fas fa-box-open fa-2x mb-2 d-block"></i>
                                                    Belum ada data barang.
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- end row --}}

            </div>
        </section>
    </div>

    {{-- ── Footer ─────────────────────────────────── --}}
    <footer class="main-footer">
        <strong>&copy; {{ date('Y') }}
            <a href="#" style="color:#FF2D20;">PeTIK II Jombang</a> &middot; YBM PLN
        </strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>Tugas09_Laravel</b> &mdash; Data Barang
        </div>
    </footer>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
</body>
</html>
