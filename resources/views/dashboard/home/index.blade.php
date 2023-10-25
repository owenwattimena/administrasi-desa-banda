@extends('dashboard.templates.index')

@section('title')
Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ $total_warga }}</h3>

                <p>Total Warga</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
            <div class="inner">
                <h3>{{ $total_perempuan }}</h3>

                <p>Total Perempuan</p>
            </div>
            <div class="icon">
                <i class="fa fa-female"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $total_laki }}</h3>

                <p>Total Laki-laki</p>
            </div>
            <div class="icon">
                <i class="fa fa-male"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ $total_kk }}</h3>

                <p>Total KK</p>
            </div>
            <div class="icon">
                <i class="fa fa-address-card"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
        </div>
    </div>
</div>
@endsection
