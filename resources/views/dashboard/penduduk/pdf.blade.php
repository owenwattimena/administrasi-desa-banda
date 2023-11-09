<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap4/css/bootstrap.min.css') }}" />
    {{-- <link
      href="{{ asset('assets/bootstrap4/css/bootstrap.min.css') }}"
    rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous"
    /> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <title>Data Penduduk</title>
    <style>
        body {
            background-color: white;
            /* padding: 25px; */
        }

        * {
            font-family: 'Times New Roman', Times, serif, Helvetica, sans-serif !important;
            font-size: 16px !important;
        }

        .text-center {
            text-align: center;
        }

        .logo {
            width: 100px;
            margin-left: -50px;
            margin-right: 10px;
            box-sizing: border-box;
        }

        hr {
            border-top: 3px solid black;
        }

        h2 {
            font-size: 20px !important;
            font-weight: bold;
        }

        h1 {
            font-weight: bold;
            font-size: 24px !important;
        }

        /* #table-header{
            text-align: center;
            width: 100%;
        } */
        #table {
            width: 80%;
        }

        #table,
        #table th,
        #table td {
            border: 0px solid black !important;
        }

        table .label {
            width: 150px;
        }

        table .separator {
            width: 30px;
            text-align: center;
        }

        .border-hide {
            border-left-color: white !important;
            border-bottom-color: white !important;
        }

        #sign,
        #sign th,
        #sign td {
            border: 1px solid white !important;
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .text-right {
            text-align: right;
            float: right;
        }

        #daftar-keluarga,
        #daftar-keluarga th,
        #daftar-keluarga td {
            border: 1px solid;
            border-collapse: collapse;
        }

    </style>
</head>
<body class="px-5">
    <header class="text-center">
        <table id="table-header" class="mx-auto" style="border:none">
            <tr>
                <td>
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/3/3d/Lambang_Kabupaten_Maluku_Tengah.png" style="width: 60px;" alt="Logo Kota Ambon">
                </td>
                <td>
                    <h2 style="margin-bottom:0;" class="text-center mb-0">PEMERINTAH KABUPATEN MALUKU TENGAH</h2>
                    <h2 style="margin-top:0;margin-bottom:0;" class="text-center mb-0">KECAMATAN BANDA</h2>
                    <h2 style="margin-bottom:0;margin-top:0;" class="text-center mb-0">NEGERI ADMINISTRASITIF RAJAWALI</h2>
                    <p style="margin-top:0;" class="text-center">Jln, Imam Samiun,RT 02 kode pos 97593</p>
                </td>
            </tr>
        </table>
    </header>
    <hr>
    <div>
        <h2 class="text-center" style="margin-bottom:15px;">
            Laporan Data Penduduk
        </h2>
    </div>
    <table id="daftar-keluarga">
        <thead>
            <tr>
                <th>No</th>
                <th>No. KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Status Perkawinan</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Alamat</th>
                <th>RT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penduduk as $key => $item)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $item->no_kk }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->agama }}</td>
                <td>{{ $item->pendidikan }}</td>
                <td>{{ $item->pekerjaan }}</td>
                <td>{{ $item->status_perkawinan }}</td>
                <td>{{ $item->nama_ayah }}</td>
                <td>{{ $item->nama_ibu }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->rt->rt }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
