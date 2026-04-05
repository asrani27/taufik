<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan</title>

    <style>
        body {
            font-family: "Times New Roman", serif;
            font-size: 14px;
        }

        .container {
            width: 100%;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
            position: relative;
        }

        .logo-container {
            position: absolute;
            left: 0;
            top: 0;
            width: 150px;
            height: 250px;
        }

        .logo-container img {
            width: 100%;
            height: auto;
            max-height: 100px;
        }

        .header-content {
            margin-left: 100px;
        }

        .header h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 1px 0;
            text-transform: uppercase;
        }

        .header h2 {
            font-size: 20px;
            font-weight: bold;
            margin: 1px 0;
            text-transform: uppercase;
        }

        .header p {
            font-size: 12px;
            margin: 3px 0;
        }

        .line {
            border-top: 2px solid black;
            margin: 10px 0 20px 0;
        }

        .judul {
            text-align: center;
            margin-bottom: 20px;
        }

        .judul h4 {
            margin: 0;
            font-size: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid black;
            padding: 6px;
            text-align: center;
        }

        table th {
            font-weight: bold;
            font-size: 12px;
        }

        .ttd {
            width: 300px;
            float: right;
            margin-top: 40px;
            text-align: left;
        }

        .ttd p {
            margin: 3px 0;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">

            <div class="logo-container">
                <img src="{{ base_path('public/logo/tanbu.png') }}" width="10px">
            </div>
            <div class="header-content">
                <h1>DINAS PENDIDIKAN DAN KEBUDAYAAN</h1>
                <h2>KABUPATEN TANAH BUMBU</h2>
                <h2>SEKOLAH MENENGAH KEJURUAN NEGERI 2 SIMPANG EMPAT</h2>
                <p>Jl. sampurna Desa hidayah makmur kecamatan simpang empat kabupaten tanah bumbu
                </p>
            </div>

        </div>

        <div class="line"></div>

        <div class="judul">
            <h4>LAPORAN DATA SISWA</h4>
        </div>

        <table>
            <thead>
                <tr>
                    <th style="width: 30px;">No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Tanggal Masuk</th>
                    <th>Jurusan</th>
                </tr>
            </thead>

            <tbody>
                @forelse($siswas ?? [] as $i => $siswa)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->tempat_lahir }}</td>
                    <td>{{ $siswa->tanggal_lahir ? $siswa->tanggal_lahir->translatedFormat('d F Y') : '-' }}</td>
                    <td>{{ strtoupper($siswa->jenis_kelamin) }}</td>
                    <td>{{ $siswa->nama_ayah }}</td>
                    <td>{{ $siswa->nama_ibu }}</td>
                    <td>{{ $siswa->pekerjaan_ayah }}</td>
                    <td>{{ $siswa->pekerjaan_ibu }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>{{ $siswa->telp }}</td>
                    <td>{{ $siswa->tanggal_masuk ? $siswa->tanggal_masuk->translatedFormat('d F Y') : '-' }}</td>
                    <td>{{ $siswa->jurusan ? $siswa->jurusan->nama : '-' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="14" style="text-align: center;">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="ttd">
            <p>Simpang Empat, {{ now()->translatedFormat('d F Y') }}</p>
            <p>Mengetahui Kepala Sekolah,</p>

            <br><br><br>

            <p><b>nama</b></p>
            <p>NIP.</p>
        </div>

    </div>

</body>

</html>