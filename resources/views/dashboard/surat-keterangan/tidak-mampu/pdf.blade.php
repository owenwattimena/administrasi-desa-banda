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
    <title>Surat Keterangan Kurang Mampu</title>
    <style>
        body{
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
        .mb-0{
            margin-bottom: 0!important;
        }
        .mt-0{
            margin-top: 0!important;
        }
        .text-right{
            text-align: right;
            float: right;
        }

        #daftar-keluarga, #daftar-keluarga th, #daftar-keluarga td{
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
    <ins>
        <h2 class="text-center" style="margin-bottom:0;">
            SURAT KETERANGAN KURANG MAMPU
        </h2>
    </ins>
    <h4 class="text-center" style="margin-top:0;">NO. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /SKKM/NA.R/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; / {{ date('Y') }}</h4>
    <p class="mt-3">
        Kepala Pemerintahan Negeri Administratif Rajawali dengan ini menerangkan :
    </p>
    <div class="row">
        <div class="col-12">
            <table id="table" class="mx-auto">
                <tr>
                    <td class="label">Nama</td>
                    <td class="separator">:</td>
                    <td>{{ \Auth::user()->warga->nama }}</td>
                </tr>
                <tr>
                    <td class="label">NIK</td>
                    <td class="separator">:</td>
                    <td>{{ \Auth::user()->warga->nik }}</td>
                </tr>
                <tr>
                    <td class="label">TTL</td>
                    <td class="separator">:</td>
                    <td>{{ \Auth::user()->warga->tempat_lahir }}, {{ \Auth::user()->warga->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <td class="label">Jenis Kelamin</td>
                    <td class="separator">:</td>
                    <td>{{ \Auth::user()->warga->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td class="label">Agama</td>
                    <td class="separator">:</td>
                    <td>{{ ucwords(\Auth::user()->warga->agama) }}</td>
                </tr>
                <tr>
                    <td class="label">Pekerjaan</td>
                    <td class="separator">:</td>
                    <td>{{ ucwords(\Auth::user()->warga->pekerjaan) }}</td>
                </tr>
                <tr>
                    <td class="label">Alamat</td>
                    <td class="separator">:</td>
                    <td>{{ \Auth::user()->warga->alamat }}</td>
                </tr>
                <tr>
                    <td class="label">Kecamatan</td>
                    <td class="separator">:</td>
                    <td>Banda</td>
                </tr>
                <tr>
                    <td class="label">Kabupaten</td>
                    <td class="separator">:</td>
                    <td>Maluku Tengah</td>
                </tr>
                <tr>
                    <td class="label">Provinsi</td>
                    <td class="separator">:</td>
                    <td>Maluku</td>
                </tr>
                <tr>
                    <td class="label">Status dalam keluarga</td>
                    <td class="separator">:</td>
                    <td>{{ auth()->user()->warga->status_hubungan_keluarga }}</td>
                </tr>
            </table>
        </div>
    </div>
    <p class="mt-3">
        Adalah benar yang bersangkutan di atas merupakan {{ auth()->user()->warga->status_hubungan_keluarga }} dan  keluarga tersebut benar-benar merupakan keluarga kurang mampu, daftar anggota keluarganya sbb :
    </p>
    <table id="daftar-keluarga">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota Keluarga</th>
                <th>NIK</th>
                <th>J/K</th>
                <th>SHDK</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keluarga as $key => $item)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->status_hubungan_keluarga }}</td>
                <td>{{ $item->tempat_lahir }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->pekerjaan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>
        Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan untuk dipergunakan seperlunya.
    </p>

    {{-- <p class="text-right"><strong>
            Rumahtiga, ............,........................, {{ date('Y') }}
            <br>
            RT : {{ \Auth::user()->warga->rt }}/RW : {{ \Auth::user()->warga->rw }}
        </strong>
    </p> --}}
    <div class="text-right">
    <table class="table text-center font-weight-bold mt-5" id="sign">
        <tr>
            <td>
                <p class="pb-3 mt-0 mb-0">DIKERLUARKAN DI : RAJAWALI</p>
                <p class="pb-3 mt-0 mb-0">PADA TANGGAL  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ date('Y') }} </p>
                <p class="mb-0">KEPALA PEMERINTAH NEGERI<br>ADMINISTRATIF RAJAWALI</p>
                <br>
                <br>
                <br>
                <p class="mt-5 mb-0">(................................................)</p>
                {{-- <p>NIP.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p> --}}

            </td>
        </tr>
    </table>
    </div>
    {{--
    <table class="table text-center font-weight-bold mt-5" id="sign">
        <tr>
            <td>
                <p class="pb-3">Mengetahui,<br>Ketua RW</p>
                <p class="mt-5 mb-0">(................................................)</p>
                <p>NIP.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>

            </td>
            <td>
                <p class="pb-3"><br>Ketua RT</p>
                <p class="mt-5 mb-0">(................................................)</p>
                <p>NIP.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>

            </td>
        </tr>
    </table>
    --}}
    {{-- <p>*) Coret yang tidak perlu</p> --}}
</body>
</html>
