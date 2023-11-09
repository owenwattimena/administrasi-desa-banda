@extends('dashboard.templates.index')
@section('head')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('title')
Penduduk
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Penduduk</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <div class="card">
            <div class="card-body">
                <form action="" method="get">
                    <div class="row">
                        <div class="form-group col-md-3 has-feedback">
                            <select type="text" class="form-control" name="rt">
                                <option value="0" {{ request()->query('rt') == 0 ? 'selected' : '' }}>Semua RT</option>
                                @foreach ($rt as $item)
                                <option value="{{ $item->id }}" {{ request()->query('rt') == $item->id ? 'selected' : '' }}>{{ $item->rt }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3 has-feedback">
                            <button type="submit" name="filter" value="filter" class="btn btn-success">Filter</button>
                            <button type="submit" name="cetak" value="cetak" class="btn btn-danger"> <i class="fa fa-file"></i> Cetak</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. KK</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Jenis Kelamin</th>
                    <th>RT</th>
                    <th>Dikonfirmasi Pada</th>
                    <th>Aksi</th>
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
                    <td>{{ $item->rt->rt }}</td>
                    @if ($item->confirmed_at != null)
                    <td>{{ $item->confirmed_at }}</td>
                    @else
                    <td> <span class="badge bg-yellow">Belum Terkonfirmasi</span> </td>
                    @endif
                    <td>
                        <a href="{{ route('penduduk.show', $item->id) }}" class="btn btn-sm bg-green">Lihat</a>
                        <form action="{{ route('penduduk.delete', $item->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm bg-red" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
<!-- DataTables -->
<script src="{{ asset('assets') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true
            , 'lengthChange': false
            , 'searching': false
            , 'ordering': true
            , 'info': true
            , 'autoWidth': false
        })
    })

</script>
@endsection
