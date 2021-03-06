<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit data obat</title>
    <link href="{{asset('assets/img/obatin.png') }}" rel="icon">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/materialize/css/materialize.min.css') }}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="{{asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{asset('assets/fontawesome/css/all.min.css') }}" rel="stylesheet" />

    <!-- Morris Chart Styles-->
    <link href="{{asset('assets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('assets/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('assets/js/Lightweight-Chart/cssCharts.css') }}">
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</head>

<body>

        <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="navbar-brand waves-effect waves-dark" src="{{asset('assets/img/logo.png') }}" alt="">

                <div id="sideNav" href=""></div>
                    </div>

            <ul class="nav navbar-top-links navbar-right">


                 <li><a class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-user fa-fw"></i>{{ Auth::guard('mitra')->user()->name }}<span class="caret"></span></a>
                 <ul class="dropdown-menu" style="padding: 20px 10px 5px 10px; width:150px;">
                 <li><a href="{{ url('/keluar') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </ul>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="waves-effect waves-dark" href="{{url('/mitra/index') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect waves-dark"><i class="fa fa-pills"></i> Produk Obat<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/kategori/tampil') }}">Kategori</a>
                            </li>
                            <li>
                                <a href="{{ url('mitra/obat') }}">Data Obat</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ url('transaksi-pesanan') }}" class="waves-effect waves-dark"><i class="fa fa-shopping-basket"></i> Transaksi</a>
                    </li>
                    <li>
                        <a href="{{ url('upload') }}" class="waves-effect waves-dark"><i class="fas fa-file-invoice"></i>Resep Dokter</a>
                    </li>

                </ul>

            </div>

        </nav>
        <div id="page-wrapper">
		  <div class="header">
                        <h1 class="page-header">
                          Edit Data Obat
                        </h1>

                    <div id="page-inner">
                    <div class="row">
                   <div class="col-md-9">
                       <!-- Advanced Tables -->
                       <div class="card">
                                    <div class="card-action">
                                        <form method="post" action="{{ url('/Mitra/update_obat/'. $obat->id) }}" enctype="multipart/form-data">

                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <div class="form-group">

                                        <input type="text" name="nama_obat" class="form-control" placeholder="Nama Obat" value=" {{ $obat->nama_obat }}">
                                        @if($errors->has('nama_obat'))
                                            <div class="text-danger">
                                                {{ $errors->first('nama_obat')}}
                                            </div>
                                        @endif

                                    </div>

                                    <div class="form-group">

                                        <textarea name="deskripsi_obat" class="form-control" placeholder="Deskripsi Obat">{{ $obat->deskripsi_obat }}</textarea>

                                        @if($errors->has('deskripsi_obat'))
                                            <div class="text-danger">
                                                {{ $errors->first('deskripsi_obat')}}
                                            </div>
                                        @endif

                                    </div>

                                    <div class="form-group">

                                        <input type="text" name="stok" class="form-control" placeholder="Stok" value=" {{ $obat->stok }} ">
                                        @if($errors->has('stok'))
                                            <div class="text-danger">
                                                {{ $errors->first('stok')}}
                                            </div>
                                        @endif

                                    </div>


                                    <div class="form-group">
                                    <b>Gambar Obat</b><br/>
                                    <input type="file" name="gambar">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" name="indikasi" class="form-control" placeholder="Indikasi"value=" {{ $obat->indikasi }}">
                                        @if($errors->has('indikasi'))
                                            <div class="text-danger">
                                                {{ $errors->first('indikasi')}}
                                            </div>
                                        @endif

                                    </div>

                                    <div class="form-group">

                                        <textarea name="komposisi" class="form-control" placeholder="Komposisi">{{ $obat->komposisi }}</textarea>

                                        @if($errors->has('komposisi'))
                                            <div class="text-danger">
                                                {{ $errors->first('komposisi')}}
                                            </div>
                                        @endif

                                    </div>

                                    <div class="form-group">

                                        <input type="text" name="dosis" class="form-control" placeholder="dosis" value=" {{ $obat->dosis }} ">
                                        @if($errors->has('dosis'))
                                            <div class="text-danger">
                                                {{ $errors->first('dosis')}}
                                            </div>
                                        @endif

                                    </div>
                                    <div class="form-group">

                                        <input type="text" name="penyajian" class="form-control" placeholder="penyajian" value=" {{ $obat->penyajian }} ">
                                        @if($errors->has('penyajian'))
                                            <div class="text-danger">
                                                {{ $errors->first('penyajian')}}
                                            </div>
                                        @endif

                                    </div>

                                    <div class="form-group">

                                        <textarea name="keterangan" class="form-control" placeholder="Keterangan">{{ $obat->keterangan }}</textarea>

                                        @if($errors->has('keterangan'))
                                            <div class="text-danger">
                                                {{ $errors->first('keterangan')}}
                                            </div>
                                        @endif

                                    </div>
                                    <div class="form-group">
                                                    <label for="kategori_id">Kategori</label>
                                                    <select name="kategori_id" class="form-control">
                                                        <option value="">Pilih</option>
                                                        @foreach ($kategori as $row)
                                                        <option value="{{ $row->id }}" {{ old('kategori_id') == $row->id ? 'selected':'' }}>{{ $row->name_kategori }}</option>
                                                        @endforeach
                                                    </select>
                                                    <p class="text-danger">{{ $errors->first('kategori_id') }}</p>
                                                </div>

                                    <div class="form-group">

                                        <input type="text" name="harga" class="form-control" placeholder="Harga" value=" {{ $obat->harga }} ">
                                        @if($errors->has('harga'))
                                            <div class="text-danger">
                                                {{ $errors->first('harga')}}
                                            </div>
                                        @endif

                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




        <!--  -->
        <!-- /. NAV SIDE  -->


        <footer>

        <p>All right reserved. Template by: <a href="https://webthemez.com/admin-template/">WebThemez.com</a></p>
        </footer>



				<!-- /. ROW  -->

            <!-- /. PAGE INNER  -->
        <!-- </div> -->
        <!-- /. PAGE WRAPPER  -->
    <!-- </div>  -->
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>


    <script>
      $(function () {
        $("#datatables").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
        });
      });
    </script>
    <!-- jQuery Js -->
    <script src="{{asset('assets/js/jquery-1.10.2.js') }}"></script>

	<!-- Bootstrap Js -->
    <script src="{{asset('assets/js/bootstrap.min.js') }}"></script>

	<script src="{{asset('assets/materialize/js/materialize.min.js') }}"></script>

    <!-- Metis Menu Js -->
    <script src="{{asset('assets/js/jquery.metisMenu.js') }}"></script>
    <!-- Morris Chart Js -->
    <script src="{{asset('assets/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{asset('assets/js/morris/morris.js') }}"></script>


	<script src="{{asset('assets/js/easypiechart.js') }}"></script>
	<script src="{{asset('assets/js/easypiechart-data.js') }}"></script>

	 <script src="{{asset('assets/js/Lightweight-Chart/jquery.chart.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{asset('assets/js/custom-scripts.js') }}"></script>


</body>

</html>
