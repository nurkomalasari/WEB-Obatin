<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title> 
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
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				

                 <li><a class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-user fa-fw"></i>{{ Auth::guard('admin')->user()->name }}<span class="caret"></span></a>
                 <ul class="dropdown-menu" style="padding: 20px 10px 5px 10px; width:150px;">
                 <li><a href="{{ url('/keluar') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </ul>
        </nav>

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
        <!-- /. NAV SIDE  -->
      
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
									
                    </div>
            <div id="page-inner">

			<div class="dashboard-cards"> 
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image red">
						<i class="material-icons dp48">import_export</i>
						</div>
						<div class="card-stacked red">
						<div class="card-content">
						<!-- <h3>84,198</h3>  -->
						</div>
						<div class="card-action">
						<!-- <strong>REVENUE</strong> -->
						</div>
						</div>
						</div>
	 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image orange">
						<i class="material-icons dp48">shopping_cart</i>
						</div>
						<div class="card-stacked orange">
						<div class="card-content">
						<!-- <h3>36,540</h3>  -->
						</div>
						<div class="card-action">
						<!-- <strong>SALES</strong> -->
						</div>
						</div>
						</div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
							<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image blue">
						<i class="material-icons dp48">equalizer</i>
						</div>
						<div class="card-stacked blue">
						<div class="card-content">
						<!-- <h3>24,225</h3>  -->
						</div>
						<div class="card-action">
						<!-- <strong>PRODUCTS</strong> -->
						</div>
						</div>
						</div> 
						 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
					<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image green">
						<i class="material-icons dp48">supervisor_account</i>
						</div>
						<div class="card-stacked green">
						<div class="card-content">
						<!-- <h3>88,658</h3>  -->
						</div>
						<div class="card-action">
						<!-- <strong>VISITS</strong> -->
						</div>
						</div>
						</div> 
						 
                    </div>
                </div>
			   </div>
        
				</footer>
            </div>
          
				<!-- /. ROW  --> 
			
            <!-- /. PAGE INNER  -->
        <!-- </div> -->
        <!-- /. PAGE WRAPPER  -->
    <!-- </div>  -->
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
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