<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
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

        table {
            width: 100%;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,.06);
            border-collapse: collapse;
            overflow: hidden;
        }

        thead tr {
            background: #1a1a2e;
        }

        thead th {
            color: #fff;
            font-size: .82rem;
            text-transform: uppercase;
            letter-spacing: .6px;
            padding: 16px 20px;
            text-align: left;
        }

        tbody tr {
            border-bottom: 1px solid #f0f2f5;
            transition: background .15s;
        }

        tbody tr:last-child { border-bottom: none; }
        tbody tr:hover { background: #fffafa; }

        tbody td {
            padding: 16px 20px;
            color: #1a1a2e;
            font-size: .95rem;
        }

        .harga {
            font-weight: 700;
            color: #FF2D20;
        }

        .no-col { color: #bbb; font-size: .85rem; }
    </style>
</head>
<body>

<div class="container">
    <div class="page-header">
        <h1>Daftar <span class="accent">Produk</span></h1>
        <p>Menampilkan {{ count($produk) }} produk tersedia</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $i => $item)
            <tr>
                <td class="no-col">{{ $i + 1 }}</td>
                <td>{{ $item['nama_produk'] }}</td>
                <td class="harga">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
