<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Laravel')</title>
    <style>
        /* ── Reset & Base ──────────────────────────────── */
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            color: #1a1a2e;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ── Header ────────────────────────────────────── */
        header {
            background: #1a1a2e;
            padding: 0 40px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 12px rgba(0,0,0,.3);
        }

        .header-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .header-logo {
            width: 32px;
            height: 32px;
            background: #FF2D20;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: .95rem;
            color: #fff;
            letter-spacing: -1px;
        }

        .header-title {
            font-size: 1rem;
            font-weight: 700;
            color: #fff;
        }

        .header-title span { color: #FF2D20; }

        nav {
            display: flex;
            gap: 24px;
        }

        nav a {
            color: #aaa;
            text-decoration: none;
            font-size: .88rem;
            transition: color .2s;
        }

        nav a:hover, nav a.active { color: #fff; }
        nav a.active { font-weight: 600; }

        /* ── Main Content ───────────────────────────────── */
        main {
            flex: 1;
            padding: 40px 20px;
        }

        /* ── Footer ────────────────────────────────────── */
        footer {
            background: #1a1a2e;
            padding: 20px 40px;
            text-align: center;
            border-top: 3px solid #FF2D20;
        }

        footer p {
            color: #666;
            font-size: .82rem;
        }

        footer span { color: #FF2D20; font-weight: 600; }
    </style>

    @stack('styles')
</head>
<body>

    {{-- ── Header ── --}}
    <header>
        <a class="header-brand" href="/">
            <div class="header-logo">L</div>
            <span class="header-title">Laravel <span>App</span></span>
        </a>
        <nav>
            <a href="/profil" class="{{ request()->is('profil') ? 'active' : '' }}">Profil</a>
        </nav>
    </header>

    {{-- ── Konten utama ── --}}
    <main>
        @yield('content')
    </main>

    {{-- ── Footer ── --}}
    <footer>
        <p>&copy; {{ date('Y') }} <span>PeTIK II Jombang</span> &middot; YBM PLN &middot; Tugas04_Laravel</p>
    </footer>

    @stack('scripts')
</body>
</html>
