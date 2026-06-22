<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,.08);
            padding: 40px 48px;
            min-width: 360px;
            text-align: center;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #FF2D20;
            color: #fff;
            font-size: 2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        h1 {
            font-size: 1.6rem;
            color: #1a1a2e;
            margin-bottom: 4px;
        }

        .badge {
            display: inline-block;
            background: #fff3f3;
            color: #FF2D20;
            font-size: .8rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 99px;
            margin-bottom: 28px;
            letter-spacing: .5px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 0;
            border-bottom: 1px solid #f0f2f5;
            text-align: left;
        }

        .info-row:last-child { border-bottom: none; }

        .info-label {
            font-size: .82rem;
            color: #999;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .info-value {
            font-size: 1rem;
            font-weight: 600;
            color: #1a1a2e;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="avatar">{{ strtoupper(substr($biodata['nama'], 0, 1)) }}</div>
    <h1>{{ $biodata['nama'] }}</h1>
    <span class="badge">Profil Peserta</span>

    <div class="info-row">
        <span class="info-label">Nama Lengkap</span>
        <span class="info-value">{{ $biodata['nama'] }}</span>
    </div>
    <div class="info-row">
        <span class="info-label">Kelas</span>
        <span class="info-value">{{ $biodata['kelas'] }}</span>
    </div>
</div>

</body>
</html>
