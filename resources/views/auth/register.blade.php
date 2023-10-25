<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('assets') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets') }}/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
    <div class="container">
        <div class="register-logo" style="margin-top: 15px">
            <a href="{{ asset('assets') }}/index2.html">{{ Config::get('app.name', 'default') }}</a>
        </div>

        <div class="box">
            <div class="box-body">
                <h3 class="login-box-msg" style="margin-top: 15px">DAFTAR</h3>
                @if(session('alert'))
                    <div class="alert alert-{{ session('alert')['type'] }} alert-dismissible callout">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> {{ session('alert')['type'] }}!</h4>
                        {{ session('alert')['message'] }}
                    </div>
                @endif
                <form action="{{ route('register.do') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="no_kk">No. KK</label>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Masukan No. KK" name="no_kk">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nik">NIK</label>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Masukan NIK" name="nik">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="nama">Nama</label>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Masukan Nama" name="nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Masukan Tempat Lahir" name="tempat_lahir">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <div class="form-group has-feedback">
                                <input type="date" class="form-control" placeholder="" name="tanggal_lahir">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <div class="form-group has-feedback">
                                <select class="form-control" name="jenis_kelamin">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="status_hubungan_keluarga">Status Hubungan Keluarga</label>
                            <div class="form-group has-feedback">
                                <select class="form-control" name="status_hubungan_keluarga">
                                    <option value="Kelapa Keluarga">Kelapa Keluarga</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Cucu">Cucu</option>
                                    <option value="Famili lain">Famili lain</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="agama">Agama</label>
                            <div class="form-group has-feedback">
                                <select class="form-control" name="agama">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budah">Budah</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Kepercayaan lainnya">Kepercayaan lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pendidikan">Pendidkan</label>
                            <div class="form-group has-feedback">
                                <select class="form-control" name="pendidikan">
                                    <option value="Doktor">Doktor</option>
                                    <option value="Megister">Megister</option>
                                    <option value="Sarjana/Diploma">Sarjana/Diploma</option>
                                    <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                    <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                    <option value="TK/Paud">TK/Paud</option>
                                    <option value="Belum sekolah">Belum sekolah</option>
                                    <option value="Tidak sekolah">Tidak sekolah</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="pekerjaan">Pekerjaan</label>
                            <div class="form-group has-feedback">
                                <select class="form-control" name="pekerjaan">
                                    <option value="Belum/Tidak bekerja">Belum/Tidak bekerja</option>
                                    <option value="Masiswa/Pelajar">Masiswa/Pelajar</option>
                                    <option value="Mengurus rumah tangga">Mengurus rumah tangga</option>
                                    <option value="Nelayan">Nelayan</option>
                                    <option value="Petani">Petani</option>
                                    <option value="Tukang ojek">Tukang ojek</option>
                                    <option value="Tukang kayu">Tukang kayu</option>
                                    <option value="Tukang batu">Tukang batu</option>
                                    <option value="Honorer">Honorer</option>
                                    <option value="Karyawan swasta">Karyawan swasta</option>
                                    <option value="POLRI">POLRI</option>
                                    <option value="Pegawai negeri">Pegawai negeri</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Pensiun">Pensiun</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_ayah">Nama Ayah</label>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Masukan Nama Ayah" name="nama_ayah">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_ibu">Nama Ibu</label>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Masukan Nama Ibu" name="nama_ibu">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="alamat">Alamat</label>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="rw">RW</label>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Masukan RW" name="rw">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="rt">RT</label>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Masukan RT" name="rt">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="password">Password</label>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Masukan Password" name="password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- Atau -</p>
                    <a href="{{ route('login') }}" class="btn btn-default btn-block btn-flat">Masuk</a>

                </div>

            </div>

        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="{{ asset('assets') }}/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('assets') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets') }}/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue'
                , radioClass: 'iradio_square-blue'
                , increaseArea: '20%' /* optional */
            });
        });

    </script>
</body>
</html>
