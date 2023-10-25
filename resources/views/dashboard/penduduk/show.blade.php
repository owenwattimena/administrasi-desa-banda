@extends('dashboard.templates.index')

@section('title')
Penduduk
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Detail Penduduk</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        @if ($warga->confirmed_at == null)
        <form action="{{ route('penduduk.confirm', $warga->id) }}" method="post" class="text-right">
            @csrf
            <button class="btn btn-sm bg-maroon" type="submit" name="confirm" value="tolak" onclick="return confirm('Yakin ingin menolak data?')">Tolak</button>
            <button class="btn btn-sm bg-green" type="submit" name="confirm" value="terima" onclick="return confirm('Yakin ingin menerima data?')">Terima</button>
        </form>
        @endif

        <div class="row" id="data">
            <div class="col-md-6">
                <label for="no_kk">No. KK</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Masukan No. KK" name="no_kk" value="{{ $warga->no_kk }}">
                </div>
            </div>
            <div class="col-md-6">
                <label for="nik">NIK</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Masukan NIK" name="nik" value="{{ $warga->nik }}">
                </div>
            </div>
            <div class="col-md-12">
                <label for="nama">Nama</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" value="{{ $warga->nama }}">
                </div>
            </div>
            <div class="col-md-6">
                <label for="tempat_lahir">Tempat Lahir</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Masukan Tempat Lahir" name="tempat_lahir" value="{{ $warga->tempat_lahir }}">
                </div>
            </div>
            <div class="col-md-6">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <div class="form-group has-feedback">
                    <input type="date" class="form-control" placeholder="" name="tanggal_lahir" value="{{ $warga->tanggal_lahir }}">
                </div>
            </div>
            <div class="col-md-6">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="form-group has-feedback">
                    <select class="form-control" name="jenis_kelamin">
                        @foreach (config('constant.jenis_kelamin') as $item)
                        <option value="{{ $item }}" {{ $item == $warga->jenis_kelamin ? 'selected' : '' }}>{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="status_hubungan_keluarga">Status Hubungan Keluarga</label>
                <div class="form-group has-feedback">
                    <select class="form-control" name="status_hubungan_keluarga">
                        @foreach (config('constant.status_hubungan_keluarga') as $item)
                        <option value="{{ $item }}" {{ $item == $warga->status_hubungan_keluarga ? 'selected' : '' }}>{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="agama">Agama</label>
                <div class="form-group has-feedback">
                    <select class="form-control" name="agama">
                        @foreach (config('constant.agama') as $item)
                        <option value="{{ $item }}" {{ $item == $warga->agama ? 'selected' : '' }}>{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="pendidikan">Pendidkan</label>
                <div class="form-group has-feedback">
                    <select class="form-control" name="pendidikan">
                        @foreach (config('constant.pendidikan') as $item)
                        <option value="{{ $item }}" {{ $item == $warga->pendidikan ? 'selected' : '' }}>{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <label for="pekerjaan">Pekerjaan</label>
                <div class="form-group has-feedback">
                    <select class="form-control" name="pekerjaan">
                        @foreach (config('constant.pekerjaan') as $item)
                        <option value="{{ $item }}" {{ $item == $warga->pekerjaan ? 'selected' : '' }}>{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="nama_ayah">Nama Ayah</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Masukan Nama Ayah" name="nama_ayah" value="{{ $warga->nama_ayah }}">
                </div>
            </div>
            <div class="col-md-6">
                <label for="nama_ibu">Nama Ibu</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Masukan Nama Ibu" name="nama_ibu" value="{{ $warga->nama_ibu }}">
                </div>
            </div>
            <div class="col-md-8">
                <label for="alamat">Alamat</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat" value="{{ $warga->alamat }}">
                </div>
            </div>
            <div class="col-md-2">
                <label for="rw">RW</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Masukan RW" name="rw" value="{{ $warga->rw }}">
                </div>
            </div>
            <div class="col-md-2">
                <label for="rt">RT</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Masukan RT" name="rt" value="{{ $warga->rt }}">
                </div>
            </div>
            {{-- <div class="col-md-12">
                    <label for="password">Password</label>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Masukan Password" name="password">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group has-feedback">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
                    </div>
                </div> --}}
            <!-- /.col -->
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('#data input').attr('disabled', true);
    $('#data select').attr('disabled', true);

</script>
@endsection
