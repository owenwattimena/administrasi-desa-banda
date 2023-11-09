@extends('dashboard.templates.index')

@section('head')
<style>
    iframe {
        width: 100%;
    }

    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

</style>
@endsection
@section('title')
Pindah
@endsection

@section('content')

@if (count($data) <= 0)

<div class="box">
    <div class="box-header">Form Alamat Pindah</div>
    <div class="box-body">
        <form action="" method="get">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="no_kk">Desa/Kelurahan</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Desa/Kelurahan" name="desa_kelurahan">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="no_kk">RT</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan RT" name="rt">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="no_kk">Kecamatan</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Kecamatan" name="kecamatan">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="no_kk">Kabupaten/Kota</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Kabupaten/Kota" name="kabupaten_kota">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="no_kk">Provinsi</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Provinsi" name="provinsi">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="no_kk">Tanggal Pindah</label>
                    <div class="form-group has-feedback">
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="no_kk">Alasan Pindah</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Alasan Pindah" name="alasan_pindah">
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
            <iframe src="{{ route('sk.pindah.pdf.view', $data) }}" frameborder="0" height="800"></iframe>
            {{-- <embed type="application/pdf" src="{{ route('admin.surat-pengantar.domisili-pdf') }}" height="500" width="100%"></embed> --}}
        </div>
    </div>
</div>
@endif

@endsection
