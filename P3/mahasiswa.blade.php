<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 720px;
            margin: 0 auto;
        }

        .page-header {
            margin-bottom: 28px;
        }

        .page-header h1 {
            font-size: 1.8rem;
            color: #1a1a2e;
        }

        .page-header p {
            color: #999;
            font-size: .9rem;
            margin-top: 4px;
        }

        .accent { color: #FF2D20; }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 16px;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,.06);
            padding: 20px 24px;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: transform .15s, box-shadow .15s;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,.10);
        }

        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #FF2D20;
            color: #fff;
            font-weight: 700;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .info h3 {
            font-size: 1rem;
            color: #1a1a2e;
            margin-bottom: 4px;
        }

        .jurusan-badge {
            display: inline-block;
            background: #f0f2f5;
            color: #555;
            font-size: .75rem;
            padding: 3px 10px;
            border-radius: 99px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="page-header">
        <h1>Data <span class="accent">Mahasiswa</span></h1>
        <p>Total {{ count($mahasiswa) }} mahasiswa terdaftar</p>
    </div>

    <div class="grid">
        @foreach ($mahasiswa as $mhs)
        <div class="card">
            <div class="avatar">{{ strtoupper(substr($mhs['nama'], 0, 1)) }}</div>
            <div class="info">
                <h3>{{ $mhs['nama'] }}</h3>
                <span class="jurusan-badge">{{ $mhs['jurusan'] }}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>

</body>
</html>
