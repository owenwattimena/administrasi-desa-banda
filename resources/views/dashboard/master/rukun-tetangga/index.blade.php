@extends('dashboard.templates.index')
@section('head')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('title')
Rukun Tetangga
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Rukun Tetangga</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="right">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default">Tambah</button>
        </div>
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tambah RT</h4>
                    </div>
                    <form action="{{ route('master.rt.create') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama RT</label>
                                <input type="text" maxlength="3" class="form-control" id="exampleInputEmail1" placeholder="Masukan RT" name="rt" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama RT</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rt as $key => $item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->rt }}</td>

                    <td>
                        {{-- <a href="{{ route('penduduk.show', $item->id) }}" class="btn btn-sm bg-green">Lihat</a> --}}
                        <form action="{{ route('master.rt.delete', $item->id) }}" method="post" style="display: inline;">
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
