<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Laporan</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #eef6f8;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 500px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #176b87;
            margin-top: 0;
        }

        .success {
            text-align: center;
            color: #287d3c;
            margin-bottom: 25px;
        }

        .data {
            background: #f5f8f9;
            padding: 20px;
            border-radius: 10px;
        }

        .item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #ddd;
        }

        .item:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: bold;
        }

        .button {
            display: block;
            text-align: center;
            text-decoration: none;
            background: #176b87;
            color: white;
            padding: 12px;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Laporan Berhasil</h1>

    <p class="success">
        Data laporan banjir berhasil diterima.
    </p>

    <div class="data">

        <div class="item">
            <span class="label">Nama Pelapor</span>
            <span>{{ $data['nama'] }}</span>
        </div>

        <div class="item">
            <span class="label">Lokasi</span>
            <span>{{ $data['lokasi'] }}</span>
        </div>

        <div class="item">
            <span class="label">Tinggi Genangan</span>
            <span>{{ $data['tinggi'] }} cm</span>
        </div>

    </div>

    <a href="{{ route('laporbanjir.form') }}" class="button">
        Buat Laporan Baru
    </a>

</div>

</body>
</html>