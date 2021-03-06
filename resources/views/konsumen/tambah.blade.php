<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mitra</title> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/materialize/css/materialize.min.css') }}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="{{asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
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
                <a class="navbar-brand waves-effect waves-dark" href=""><i class="large material-icons">track_changes</i> <strong>Obatin</strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp50">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				

                 <li><a class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-user fa-fw"></i>{{ Auth::guard('admin')->user()->name }}<span class="caret"></span></a>
                 <ul class="dropdown-menu" style="padding: 20px 10px 5px 10px; width:150px;">
                 <li><a href="{{ url('/keluar') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </ul>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                <li>
                        <a class="active-menu waves-effect waves-dark" href=""><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect waves-dark"><i class="fa fa-desktop"></i>Validasi Pendaftaran Apotek</a>
                    </li>
					<li>
                        <a href="{{ url('admin/konsumen') }}" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i>Data Pengguna</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Validasi Pembayaran</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect waves-dark"><i class="fa fa-shopping-cart"></i>Penjualan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ url('admin/status-pemesanan') }}">Status Pemesanan</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/status-pembayaran') }}">Status Pembayaran</a>
                            </li>
                           
                        </ul>
                    </li>
                    
                    <li>
                        <a href="" class="waves-effect waves-dark"><i class="fa fa-table"></i>Data Mitra</a>
                    </li>

                </ul>

            </div>

        </nav>
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Dashboard
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Data</li>
					</ol> 

                    
                    <div id="page-inner"> 

                             
               <div class="row">
                   <div class="col-md-9">
                       <!-- Advanced Tables -->
                       <div class="card">
                           <div class="card-action">
                                <form role="form" method="post" action="{{ url('/konsumen/store') }}">
                                @csrf
                                <div class="box-body">
                                <div class="form-group">
                                        
                                        <input type="text" name="name" class="form-control" placeholder="Nama Kunsumen" >
                                        @if($errors->has('name'))
                                            <div class="text-danger">
                                                {{ $errors->first('name')}}
                                            </div>
                                        @endif
            
                                    </div>
                                <div class="form-group">
                                        
                                        <input type="text" name="email" class="form-control" placeholder="E-mail" >
                                        @if($errors->has('email'))
                                            <div class="text-danger">
                                                {{ $errors->first('email')}}
                                            </div>
                                        @endif
            
                                    </div>
                                <div class="form-group">
                                        
                                        <input type="text" name="password" type="password" class="form-control" placeholder="password" >
                                        @if($errors->has('password'))
                                            <div class="text-danger">
                                                {{ $errors->first('password')}}
                                            </div>
                                        @endif
            
                                    </div>
                                <div class="form-group">
                                        
                                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" >
                                        @if($errors->has('alamat'))
                                            <div class="text-danger">
                                                {{ $errors->first('alamat')}}
                                            </div>
                                        @endif
            
                                    </div>
                                <div class="form-group">
                                        
                                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="tanggal lahir" >
                                        @if($errors->has('tanggal_lahir'))
                                            <div class="text-danger">
                                                {{ $errors->first('tanggal_lahir')}}
                                            </div>
                                        @endif
            
                                    </div>
                                <div class="form-group">
                                        
                                        <input type="text" name="noHp" class="form-control" placeholder="Ho. Handphone" >
                                        @if($errors->has('noHp'))
                                            <div class="text-danger">
                                                {{ $errors->first('noHp')}}
                                            </div>
                                        @endif
            
                                    </div>
                                    
                            </div>
                        <!-- /.box-body -->
            
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                        </form>

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