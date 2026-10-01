<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #eaf4f7;
        }

        .container {
            width: 450px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #176b87;
            margin-bottom: 8px;
        }

        .deskripsi {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #176b87;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #176b87;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #12566d;
        }

        .error {
            background: #ffe5e5;
            color: #b00020;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>LaporBanjir</h1>

    <p class="deskripsi">
        Form pelaporan kejadian banjir
    </p>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('laporbanjir.proses') }}" method="POST">
        @csrf

        <label for="nama">Nama Pelapor</label>
        <input
            type="text"
            id="nama"
            name="nama"
            placeholder="Masukkan nama pelapor"
            value="{{ old('nama') }}"
        >

        <label for="lokasi">Lokasi Kejadian</label>
        <input
            type="text"
            id="lokasi"
            name="lokasi"
            placeholder="Contoh: Baleendah, Desa Andir"
            value="{{ old('lokasi') }}"
        >

        <label for="tinggi">Tinggi Genangan Air (cm)</label>
        <input
            type="number"
            id="tinggi"
            name="tinggi"
            placeholder="Contoh: 50"
            value="{{ old('tinggi') }}"
        >

        <button type="submit">
            Kirim Laporan
        </button>

    </form>

</div>

</body>
</html>