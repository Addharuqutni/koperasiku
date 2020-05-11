<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Koperasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('assets/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('assets/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{url('assets/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{url('assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    <header class="main-header">
            <!-- Logo -->
            <a href="/dashboard" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>K</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Koperasi</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only"></span>
            </a>
            </nav>
    </header>    
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
            <a href="/dashboard">
                <i class="fa fa-home"></i> 
                <span>Dashboard</span>
            </a>
            </li>
            <li>
            <a href="/anggota">
                <i class="fa fa-users"></i>
                <span>Anggota</span>
            </a>
            </li>
            <li class="active">
            <a href="/simpanan">
                <i class="fa fa-save"></i> 
                <span>Simpanan</span>
                <span class="pull-right-container">
            </a>
            </li>
            <li>
            <a href="/pinjaman">
                <i class="fa fa-money"></i> 
                <span>Pinjaman</span>
            </a>
            </li>
            <!-- <li>
            <a href="/transaksi">
                <i class="fa fa-dollar"></i>
                <span>Transaksi</span>
                <span class="pull-right-container">
                </span>
            </a>
            </li> -->
        </ul>
        </section>
        <!-- /.sidebar -->
  
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>Simpanan</h1>
        </section>
        <!-- Main content -->
        <section class="content"  >
        <!-- Small boxes (Stat box) -->
        <div class="">
            <div class="box box-primary">
                <!-- form start -->
                <form method="post" action="{{ route('simpanan.store') }}">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                    <label>Id Simpanan</label>
                    <input type="text" class="form-control" name="id_simpanan" placeholder="">
                    </div>
                    <div class="form-group">
                    <label>Nomor Anggota</label>
                    <input type="text" class="form-control" name="id_anggota" placeholder="Masukan Nomor Anggota">
                    </div>
                    <div class="form-group">
                    <label>Jenis Simpanan</label>
                        <select name="j_simpanan" class="form-control" date-placeholder="Jenis Simpanan">
                            <option>Pokok</option>
                            <option>Wajib</option>
                            <option>Sukarela</option>
                            <option>Hari Raya</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label>Nominal</label>
                    <input type="number" class="form-control" name="nominal" placeholder="Masukan Nominal">
                    </div>             
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                <table id="" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Kode Simpanan</th>
                    <th>No Anggota</th>
                    <th>Jenis Simpanan</th>
                    <th>Jumlah Simpanan</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($simpanan as $s)
                  <tr>
                    <td>{{ $s->created_at }}</td>
                    <td>{{ $s->id_simpanan }}</td>
                    <td>{{ $s->id_anggota }}</td>
                    <td>{{ $s->j_simpanan }}</td>
                    <td>{{ $s->nominal }}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        </section>
        <!-- /.content -->
        
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.18
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
    </footer>

    <!-- ./wrapper -->

<!-- jQuery 3 -->
    <script src="{{url('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{url('assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="{{url('assets/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{url('assets/bower_components/morris.js/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{url('assets/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('assets/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{url('assets/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('assets/dist/js/demo.js')}}"></script>
    <script>
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      locale: {
        format: 'MM/DD/YYYY'
      }
    })
    </script>

</body>
</html>