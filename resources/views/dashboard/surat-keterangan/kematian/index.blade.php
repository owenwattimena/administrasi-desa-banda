@extends('dashboard.templates.index')

@section('head')
<style>
    iframe{
        width: 100%;
    }
    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

</style>
@endsection
@section('title')
Kematian
@endsection

@section('content')


@if (count($data) <= 0)

<div class="box">
    <div class="box-header">Form Data Kematian</div>
    <div class="box-body">
        <form action="" method="get">
            <div class="row">
                <div class="col-md-12">
                    <label for="nama">Nama</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Nama" name="nama">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="no_kk">NIK</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan NIK" name="nik">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="no_kk">Tempat Lahir</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Tempat Lahir" name="tempat_lahir">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="no_kk">Tanggal Lahir</label>
                    <div class="form-group has-feedback">
                        <input type="date" class="form-control" name="tanggal_lahir">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="no_kk">Alamat</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="no_kk">Tanggal Kematian</label>
                    <div class="form-group has-feedback">
                        <input type="date" class="form-control" name="tanggal_kematian">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="no_kk">Jam Kematian</label>
                    <div class="form-group has-feedback">
                        <input type="time" class="form-control" name="jam_kematian">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="no_kk">Lokasi Kematian</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Lokasi Kematian" name="lokasi_kematian">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="no_kk">Penyebab Kematian</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Penyebab Kematian" name="penyebab_kematian">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="no_kk">Hubungan dengan pelapor</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Hubungan dengan pelapor" name="hubungan">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group has-feedback">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endif

@if (count($data) > 0)
<div style="background-color: whitesmoke; padding-top:25px; padding-bottom:25px">
    <div class="row">
        <div class="col-md-12 text-center">
            <iframe src="{{ route('sk.kematian.pdf.view', $data) }}" frameborder="0" height="800"></iframe>
            {{-- <embed type="application/pdf" src="{{ route('admin.surat-pengantar.domisili-pdf') }}" height="500" width="100%"></embed> --}}
        </div>
    </div>
</div>
@endif

@endsection
