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
Izin Usaha
@endsection

@section('content')

@if (count($data) <= 0)

<div class="box">
    <div class="box-header">Form Data Usaha</div>
    <div class="box-body">
        <form action="" method="get">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="no_kk">Alamat Tempat Usaha</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Alamat Tempat Usaha" name="alamat_usaha">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="no_kk">Nama Usaha</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Nama Usaha" name="nama_usaha">
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
            <iframe src="{{ route('sk.izin-usaha.pdf.view', $data) }}" frameborder="0" height="800"></iframe>
            {{-- <embed type="application/pdf" src="{{ route('admin.surat-pengantar.domisili-pdf') }}" height="500" width="100%"></embed> --}}
        </div>
    </div>
</div>
@endif

@endsection
