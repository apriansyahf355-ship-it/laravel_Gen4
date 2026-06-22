<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About | AdminLTE</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- AdminLTE CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">

    <style>
        /* ── Tambahan kustom di atas AdminLTE ─────────── */
        body { font-family: 'Source Sans Pro', sans-serif; }

        /* Sidebar brand warna merah Laravel */
        .main-sidebar { background-color: #1a1a2e !important; }
        .brand-link    { background-color: #FF2D20 !important; border-bottom: 1px solid rgba(0,0,0,.2); }
        .brand-link:hover { background-color: #e0261b !important; }
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active,
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link:hover {
            background-color: rgba(255,45,32,.2) !important;
            color: #fff !important;
        }
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link {
            color: #c2c7d0;
        }
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link .nav-icon {
            color: #aaa;
        }

        /* Topbar */
        .main-header.navbar { background-color: #FF2D20; border-bottom: none; }
        .main-header .nav-link, .main-header .navbar-brand { color: #fff !important; }

        /* Content breadcrumb */
        .content-header h1 { font-weight: 700; }
        .breadcrumb-item.active { color: #777; }

        /* ── Info boxes ────────────────────────────── */
        .about-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0,0,0,.08);
        }

        .about-card .card-header {
            background: #1a1a2e;
            color: #fff;
            font-weight: 700;
            font-size: 1rem;
            padding: 14px 20px;
            border: none;
        }

        .about-card .card-header i { color: #FF2D20; margin-right: 8px; }

        /* Profile hero */
        .profile-hero {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            border-radius: 10px;
            padding: 32px 28px;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 24px;
            box-shadow: 0 4px 20px rgba(0,0,0,.12);
        }

        .profile-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #FF2D20;
            font-size: 2rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border: 3px solid rgba(255,255,255,.15);
        }

        .profile-hero h2 { font-size: 1.4rem; font-weight: 700; margin-bottom: 4px; }
        .profile-hero p  { color: #aaa; font-size: .88rem; margin: 0; }

        .badge-program {
            display: inline-block;
            background: rgba(255,45,32,.25);
            color: #FF2D20;
            border: 1px solid rgba(255,45,32,.4);
            font-size: .76rem;
            font-weight: 600;
            padding: 3px 12px;
            border-radius: 99px;
            margin-top: 6px;
        }

        /* Data table */
        .data-table { width: 100%; }
        .data-table tr { border-bottom: 1px solid #f4f6f8; }
        .data-table tr:last-child { border-bottom: none; }
        .data-table td { padding: 12px 16px; font-size: .93rem; }
        .data-label { color: #888; font-weight: 600; width: 38%; font-size: .82rem; text-transform: uppercase; letter-spacing: .4px; }
        .data-sep   { color: #ccc; width: 4%; }
        .data-value { color: #1a1a2e; font-weight: 600; }
        .data-value.accent { color: #FF2D20; }

        /* Info boxes */
        .info-box-custom { border-left: 4px solid #FF2D20; border-radius: 6px; }
        .info-box-custom .info-box-icon { background: #FF2D20; border-radius: 0; }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    {{-- ══════════════════ NAVBAR ══════════════════ --}}
    <nav class="main-header navbar navbar-expand navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link font-weight-bold">PeTIK II Jombang</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="far fa-user mr-1"></i> {{ $about['nama'] }}
                </a>
            </li>
        </ul>
    </nav>

    {{-- ══════════════════ SIDEBAR ══════════════════ --}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        {{-- Brand --}}
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-bold ml-2">
                <i class="fab fa-laravel mr-1"></i> AdminLTE
            </span>
        </a>

        {{-- Sidebar user panel --}}
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <div style="width:34px;height:34px;border-radius:50%;background:#FF2D20;
                                display:flex;align-items:center;justify-content:center;
                                font-weight:800;color:#fff;font-size:.9rem;">
                        {{ strtoupper(substr($about['nama'], 0, 1)) }}
                    </div>
                </div>
                <div class="info">
                    <a href="#" class="d-block text-white">{{ $about['nama'] }}</a>
                </div>
            </div>

            {{-- Nav menu --}}
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                    <li class="nav-header" style="color:#555;font-size:.72rem;letter-spacing:.8px;">MENU UTAMA</li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/about" class="nav-link active">
                            <i class="nav-icon fas fa-user-circle"></i>
                            <p>About</p>
                        </a>
                    </li>

                    <li class="nav-header" style="color:#555;font-size:.72rem;letter-spacing:.8px;">LAINNYA</li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>Pengaturan</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>

    {{-- ══════════════════ CONTENT WRAPPER ══════════════════ --}}
    <div class="content-wrapper">

        {{-- Content Header / Breadcrumb --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">About</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main content --}}
        <section class="content">
            <div class="container-fluid">

                {{-- ── Info Boxes row ──────────────────────── --}}
                <div class="row mb-4">
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="info-box info-box-custom">
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fas fa-id-badge"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">NIM</span>
                                <span class="info-box-number">{{ $about['nim'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="info-box info-box-custom">
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fas fa-graduation-cap"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Program Studi</span>
                                <span class="info-box-number" style="font-size:.95rem;">{{ $about['program_studi'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="info-box info-box-custom">
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fas fa-layer-group"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Semester</span>
                                <span class="info-box-number">{{ $about['semester'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="info-box info-box-custom">
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fas fa-code"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Hobi</span>
                                <span class="info-box-number" style="font-size:.9rem;">{{ $about['hobi'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ── Main row ─────────────────────────────── --}}
                <div class="row">

                    {{-- Profile hero card --}}
                    <div class="col-lg-4 mb-4">
                        <div class="profile-hero">
                            <div class="profile-avatar">
                                {{ strtoupper(substr($about['nama'], 0, 1)) }}
                            </div>
                            <div>
                                <h2>{{ $about['nama'] }}</h2>
                                <p>{{ $about['email'] }}</p>
                                <span class="badge-program">
                                    <i class="fas fa-bolt mr-1"></i>{{ $about['program'] }}
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Detail data card --}}
                    <div class="col-lg-8 mb-4">
                        <div class="card about-card">
                            <div class="card-header">
                                <i class="fas fa-info-circle"></i> Informasi Lengkap
                            </div>
                            <div class="card-body p-0">
                                <table class="data-table">
                                    <tr>
                                        <td class="data-label">Nama Lengkap</td>
                                        <td class="data-sep">:</td>
                                        <td class="data-value">{{ $about['nama'] }}</td>
                                    </tr>
                                    <tr>
                                        <td class="data-label">NIM</td>
                                        <td class="data-sep">:</td>
                                        <td class="data-value accent">{{ $about['nim'] }}</td>
                                    </tr>
                                    <tr>
                                        <td class="data-label">Program Studi</td>
                                        <td class="data-sep">:</td>
                                        <td class="data-value">{{ $about['program_studi'] }}</td>
                                    </tr>
                                    <tr>
                                        <td class="data-label">Semester</td>
                                        <td class="data-sep">:</td>
                                        <td class="data-value">{{ $about['semester'] }}</td>
                                    </tr>
                                    <tr>
                                        <td class="data-label">Hobi</td>
                                        <td class="data-sep">:</td>
                                        <td class="data-value">{{ $about['hobi'] }}</td>
                                    </tr>
                                    <tr>
                                        <td class="data-label">Email</td>
                                        <td class="data-sep">:</td>
                                        <td class="data-value">{{ $about['email'] }}</td>
                                    </tr>
                                    <tr>
                                        <td class="data-label">Program Pelatihan</td>
                                        <td class="data-sep">:</td>
                                        <td class="data-value">{{ $about['program'] }}</td>
                                    </tr>
                                    <tr>
                                        <td class="data-label">Instansi</td>
                                        <td class="data-sep">:</td>
                                        <td class="data-value">{{ $about['instansi'] }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>{{-- end row --}}

            </div>{{-- end container-fluid --}}
        </section>

    </div>{{-- end content-wrapper --}}

    {{-- ══════════════════ FOOTER ══════════════════ --}}
    <footer class="main-footer">
        <strong>
            &copy; {{ date('Y') }}
            <a href="#" style="color:#FF2D20;">PeTIK II Jombang</a> &middot; YBM PLN
        </strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>Tugas05_Laravel</b> &mdash; AdminLTE 3
        </div>
    </footer>

</div>{{-- end wrapper --}}

{{-- AdminLTE JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>

</body>
</html>
