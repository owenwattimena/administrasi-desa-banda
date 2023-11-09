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

@if (auth()->user()->role == 'admin')

<div class="box">
    <div class="box-header">Pengaturan</div>
    <div class="box-body">
        <form action="{{ route('pengaturan.save') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="no_kk">Nama Pejabat Negeri</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan Nama Pejabat Negeri" name="nama_pejabat_negeri" value="{{ $pengaturan->nama_pejabat_negeri ?? '' }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="no_kk">NIP Pejabat Negeri</label>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Masukan NIP Pejabat Negeri" name="nip_pejabat_negeri" value="{{ $pengaturan->nip_pejabat_negeri ?? '' }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group has-feedback">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
@endsection
