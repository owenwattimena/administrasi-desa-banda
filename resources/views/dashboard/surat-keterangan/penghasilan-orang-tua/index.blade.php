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
Penghasilan Orang Tua
@endsection

@section('content')


{{-- <div class="clearfix" style="margin-bottom: 10px">
    <a href="{{ route('sk.domisili.pdf.view') }}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-download"></i> Unduh</a>
</div> --}}
<div style="background-color: whitesmoke; padding-top:25px; padding-bottom:25px">
    <div class="row">
        <div class="col-md-12 text-center">
            <iframe src="{{ route('sk.izin-usaha.pdf.view') }}" frameborder="0" height="800"></iframe>
            {{-- <embed type="application/pdf" src="{{ route('admin.surat-pengantar.domisili-pdf') }}" height="500" width="100%"></embed> --}}
        </div>
    </div>
</div>

@endsection
